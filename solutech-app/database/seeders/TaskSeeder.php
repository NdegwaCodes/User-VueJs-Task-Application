<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $status_name = Status::factory()->make([
            'name' => 'Completed',
        ]);

        Status::factory()->create([
            'name' => 'In Progress',
        ]);

        Status::factory()->create([
            'name' => 'Waiting For Someone',
        ]);

        Status::factory()->create([
            'name' => 'Deferred',
        ]);

        Status::factory()->create([
            'name' => 'Not Started',
        ]);

        $status_name->save();

        Status::factory()
        ->count(5)
        ->create(['name' => $status_name]);


        User::factory()
        ->count(10)
        ->hasTasks(5)
        ->create();

        Task::factory()
        ->count(100)
        ->hasStatuses(1)
        ->create(); 
    }
}
