<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Status;
use App\Models\UserTask;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        UserTask::factory()
        ->count(10)
        ->create();

        UserTask::factory()
        ->count(10)
        ->create();
    }
}
