<?php

namespace App\Services;

class AdvisorService {
    public static function filterAdvisors($advisorTable,$maxBatch){
        // $advisors = usort($advisorTable,fn($a,$b)=>max($a->batch,$b->batch));
        $advisors = $advisorTable->sortBy('batch');
        return $advisors;
    }
}
