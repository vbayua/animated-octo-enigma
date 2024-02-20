<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Issue;
use Database\Factories\IssueFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Issue::factory(3)->create([
            'user_id' => $user->id
        ]);

        $user = User::factory()->create([
            'name' => 'Jane Doe'
        ]);

        Issue::factory(3)->create([
            'user_id' => $user->id
        ]);

    }
}
