<?php

namespace App\Models;
use App\Models\Formater;

class CsmbBoard implements Board {

    protected $formater;

    public function __construct($formater) {
        $this->formater = $formater;
    }

    public function studentAverage($scores): string {
        return array_sum($scores)/count($scores);
    }

    public function studentPassed($scores): string {
        $countScores = count($scores);
       if ($countScores <= 2)  return 'fail';

       for ($i = 0;  $i < $countScores; $i++) {
            if ((int)$scores[$i] >= 8 ) return 'pass';

       }

       return 'fail';

    }
    public function studentStats($statsData) {
        return($this->formater->format($statsData));
    }

}