<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Admin;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);*/
        // Admin::factory(1)->create();
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@puc.ac.bd';
        $user->phone = fake()->phoneNumber();
        $user->password = Hash::make('654321');
        $user->role = 'admin';
        $user->address = fake()->address();
        $user->city = fake()->city();
        $user->state = fake()->city();
        $user->postcode = rand(1000,9999);
        // $user->linkedin = fake()->url();
        // $user->facebook = fake()->url();
        // $user->twitter = fake()->url();
        // $user->instagram = fake()->url();
        $user->save();
        $admin = new Admin();
        $admin->user_id = $user->id;
        $admin->save();
    }
}
