<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Designation;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->safeEmail,
            'phone'=>'01609897867',
            'password'=>Hash::make('654321'),
            'designation'=>Designation::inRandomOrder()->first()->id,
            //'advising_batch' => rand(1,8),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
