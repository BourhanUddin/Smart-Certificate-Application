<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            'Professor emeritus',
            'Professor',
            'Associate professor',
            'Assistant professor',
            'Lecturer',
            'Demonstrator'
        ];
        for ($i = 0; $i < 50; $i++) {
            $user = new User();
            $firstName = fake()->unique->firstName;
            $lastName = fake()->lastName;
            $user->name = $firstName.' '.$lastName;
            $user->email = $i == 0?"teacher@puc.ac.bd":strtolower($firstName.'.faculty@puc.ac.bd');
            $user->phone = fake()->phoneNumber;
            $user->password = Hash::make('654321');
            $user->role = 'teacher';
            $user->address = fake()->address();
            $user->city = fake()->city();
            $user->state = fake()->city();
            $user->postcode = rand(1000,9999);
            $user->save();
            Teacher::create([
                'user_id'=>$user->id,
                'designation' =>$designations[rand(0,5)],
                //'advising_batch' => rand(1,8),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' =>Department::inRandomOrder()->first()->id
            ]);
        }
    }
}
