<?php

namespace Database\Seeders;

use App\Models\PlanFeatures;
use App\Models\Plans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ======================
        // FREE PLAN
        // ======================
        $free = Plans::create([
            'name' => 'Free',
            'price_monthly' => 0,
            'price_yearly' => 0,
            'is_free' => true,
        ]);

        $this->features($free, [
            'description' => 'A basic free plan for starters',
            'daily_image_limit' => 3,
            'yearly_word_limit' => 10000,
            'yearly_word_limit_text' => '10,000 Yearly Word Limit',
            'templates_text' => '10+ Templates',
            'content_type_text' => 'All types of content',
            'languages_text' => '10+ Languages',
        ]);

        // ======================
        // SILVER PLAN
        // ======================
        $silver = Plans::create([
            'name' => 'Silver',
            'price_monthly' => 199,
            'price_yearly' => 1999,
            'is_free' => false,
        ]);

        $this->features($silver, [
            'description' => 'Best for individuals and creators',
            'daily_image_limit' => 20,
            'yearly_word_limit' => 30000,
            'yearly_word_limit_text' => '30,000 Yearly Word Limit',
            'templates_text' => '50+ Templates',
            'content_type_text' => 'All types of content',
            'languages_text' => '25+ Languages',
        ]);

        // ======================
        // DIAMOND PLAN
        // ======================
        $diamond = Plans::create([
            'name' => 'Diamond',
            'price_monthly' => 399,
            'price_yearly' => 3999,
            'is_free' => false,
        ]);

        $this->features($diamond, [
            'description' => 'Advanced plan for professionals & teams',
            'daily_image_limit' => 100,
            'yearly_word_limit' => 100000,
            'yearly_word_limit_text' => '1,00,000 Yearly Word Limit',
            'templates_text' => 'Unlimited Templates',
            'content_type_text' => 'All types of content',
            'languages_text' => 'Unlimited Languages',
        ]);
    }

    /**
     * Attach features to a plan
     */
    private function features(Plans $plan, array $features): void
    {
        foreach ($features as $key => $value) {
            PlanFeatures::create([
                'plan_id' => $plan->id,
                'key' => $key,
                'value' => $value,
            ]);
        }
    }
}
