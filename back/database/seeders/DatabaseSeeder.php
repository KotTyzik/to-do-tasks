<?php

namespace Database\Seeders;

use app\Http\Modules\Users\Models\Task;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Task::factory(10)->create();

        Task::factory()->create([
            'name' => 'Test Task',
            'email' => 'test@example.com',
        ]);
    }
}
