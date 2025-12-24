<?php

namespace Database\Seeders;

use App\Models\Plans;
use App\Models\Subscriptions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        // Plans fetch
        $freePlan    = Plans::where('name', 'Free')->first();
        $silverPlan  = Plans::where('name', 'Silver')->first();
        $diamondPlan = Plans::where('name', 'Diamond')->first();

        // ======================
        // USER 1 → SILVER (YEARLY)
        // ======================
        Subscriptions::updateOrCreate(
            ['user_id' => 1],
            [
                'plan_id'   => $silverPlan->id,
                'type'      => 'yearly',
                'starts_at' => Carbon::now(),
                'ends_at'   => Carbon::now()->addYear(),
                'status'    => 'active',
            ]
        );

        // ======================
        // OPTIONAL: EXAMPLE FREE USER (NO SUBSCRIPTION)
        // user_id 3 → FREE (by default)
        // ======================
        // No row needed in subscriptions table
    }
}
