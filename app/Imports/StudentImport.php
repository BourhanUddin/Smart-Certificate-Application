<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $row)
    {
        // if($row[2]=='' || !isset($row[2])){
        //     return null;
        // }
        return new Student([
            'name' => $row[1],
            'roll' => $row[2],
            'email' => $row[3]
        ]);
    }
}
