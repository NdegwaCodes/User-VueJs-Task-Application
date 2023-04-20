<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Status;
use App\Models\UserTask;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserTaskSeeder::class,
            TaskSeeder::class
        ]);

    }
}

