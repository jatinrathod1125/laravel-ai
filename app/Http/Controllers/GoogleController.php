<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // 1. Check if user already exists by email
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {

                // Update google_id if missing
                if (! $user->google_id) {
                    $user->update([
                        'google_id' => $googleUser->getId(),
                    ]);
                }

            } else {

                // 2. Generate unique username from email
                $baseUsername = \Illuminate\Support\Str::slug(
                    explode('@', $googleUser->getEmail())[0]
                );

                $username = $baseUsername;
                $count = 1;

                while (User::where('username', $username)->exists()) {
                    $username = $baseUsername.$count;
                    $count++;
                }

                // 3. Split full name into first & last name
                $fullName = trim($googleUser->getName());
                $nameParts = explode(' ', $fullName, 2);

                $firstName = $nameParts[0] ?? null;
                $lastName = $nameParts[1] ?? null;

                // 4. Create user
                $user = User::create([
                    'username' => $username,
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(\Illuminate\Support\Str::random(16)),
                    'role' => 'user',
                ]);
            }

            // 5. Login user
            Auth::login($user);

            // 6. Redirect after login
            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google login failed');
        }
    }
}
