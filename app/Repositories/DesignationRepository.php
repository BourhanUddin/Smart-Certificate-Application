<?php

namespace App\Repositories;

use App\Models\Designation;

class DesignationRepository implements DesignationRepositoryInterface {
    public function all(){
        return Designation::all();
    }
}
