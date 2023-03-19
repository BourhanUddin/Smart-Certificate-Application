<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $roll = 1803301210664;
    return [
            'name'=>$this->faker->name,
            'roll'=> $roll++,
            'batch'=>rand(1,8),
            'email' => $this->faker->safeEmail,
            'phone' => '01812232323',
            'password' => Hash::make('654321'),
            'completed_credit'=>rand(100,160),
            'cgpa'=>rand(200,400)/100,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }}
