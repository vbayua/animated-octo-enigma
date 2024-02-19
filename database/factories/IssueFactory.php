<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use App\Models\IssueStatus;
use App\Models\IssueLevel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'persyaratan' => $this->faker->paragraphs(2, true),
            'root_cause_analysis' => $this->faker->paragraphs(5, true),
            'category_id' => Category::factory(),
            'level_id' => IssueLevel::factory(),
            'status_id' => IssueStatus::factory(),
            'user_id' => User::factory(),
        ];
    }
}
