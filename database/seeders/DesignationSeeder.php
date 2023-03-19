<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://en.wikipedia.org/wiki/List_of_academic_ranks
        $designations = [
            'Professor emeritus',
            'Professor',
            'Associate professor',
            'Assistant professor',
            'Lecturer',
            'Demonstrator'
        ];
        foreach($designations as $des){
            Designation::create(['designation'=>$des]);
        }
    }
}
