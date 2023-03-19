<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Student::factory(1000)->create();
        static $roll = 1803301210664;
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $firstName = fake()->unique->firstName;
            $lastName = fake()->lastName;
            $user->name = $i==0?"Hemel Bourhan": $firstName.' '.$lastName;
            $user->email = $i == 0?
                "hemel@puc.ac.bd"
                :strtolower($firstName.'.stu'.'@puc.ac.bd');
            $user->phone = fake()->phoneNumber();
            $user->password = Hash::make('654321');
            $user->role = 'student';
            $user->address = fake()->address();
            $user->city = fake()->city();
            $user->state = fake()->city();
            $user->postcode = rand(1000,9999);
            $user->save();
            Student::create([
                'user_id' => $user->id,
                'roll' => $roll++,
                'batch' => rand(1, 8),
                'completed_credit' => rand(100, 160),
                'cgpa' => rand(200, 400) / 100,
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' =>Department::inRandomOrder()->first()->id
            ]);
        }
    }
}
