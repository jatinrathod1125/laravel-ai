<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
        ]);

        // Profile image
        if ($request->hasFile('image')) {
            $imageName = time().'_profile.'.$request->image->extension();
            $request->image->move(public_path('upload/user'), $imageName);
            $user->image = $imageName;
        }

        // Banner image
        if ($request->hasFile('banner')) {
            $bannerName = time().'_banner.'.$request->banner->extension();
            $request->banner->move(public_path('upload/banner'), $bannerName);
            $user->banner = $bannerName;
        }

        // Other fields
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);

        return back()->with('success', 'Profile updated successfully');
    }
}
