<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Computer Science and Engineering',
                'short_name' => 'CSE'
            ],
            [
                'name' => 'Electrical and Electronics Engineering',
                'short_name' => 'EEE'
            ],
            [
                'name' => 'Architecture',
                'short_name' => 'Arch'
            ],
            [
                'name' => 'Sociology and Sustainable Development',
                'short_name' => 'SSD'
            ],
            [
                'name' => 'Bachelor of Business Administration',
                'short_name' => 'BBA'
            ]
        ];
        foreach ($departments as $dept) {
            $department = new Department();
            $department->name = $dept['name'];
            $department->short_name = $dept['short_name'];
            $department->save();
        }
    }
}
