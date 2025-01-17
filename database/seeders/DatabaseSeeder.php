<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use App\Models\Job;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Job::factory(20)->create();
        Employer::factory(20)->create();
        Tag::factory(4)->create();


        // User::factory()->create([
        //     'first_name' => 'Test',
        //     'last_name' => 'User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
