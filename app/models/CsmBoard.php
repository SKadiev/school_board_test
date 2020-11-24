<?php

namespace App\Models;
use App\Models\Formater;

class CsmBoard implements Board {

    protected $formater;

    public function __construct($formater) {
        $this->formater = $formater;
    }

    public function studentAverage($scores): string {
        return array_sum($scores)/count($scores);
    }

    public function studentPassed($scores): string {
        $averageScore = $this->studentAverage($scores);
        if ($averageScore >= 7) return 'pass';
        else return 'fail';

    }
    public function studentStats($statsData) {
         return($this->formater->format($statsData));
        
    }

}