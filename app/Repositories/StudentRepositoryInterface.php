<?php

namespace App\Repositories;

interface StudentRepositoryInterface {
    public function all();
    public function showByBatch($batch);
    public function graduates();
}
