<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTask>
 */
class UserTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user = User::factory();
        $task = Task::factory();
        $status = Status::factory();

        return [
            'user_id' => $user,
            'task_id' => $task,
            'start_time' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'end_time' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'due_date' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'remarks' => $this->faker->sentence(),
            'status_id' => $status,
            // 'created_at' => fake()->dateTime(),
            // 'updated_at' => fake()->dateTime(),
        ];
    }
}