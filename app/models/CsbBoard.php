<?php

namespace App\Models;
use App\Models\Formater;

class CsbBoard implements Board {

    protected $formater;

    public function __construct($formater) {
        $this->formater = $formater;
    }

    public function studentAverage($scores): string {

    }

    public function studentPassed($scores): string {

    }
    public function studentStats($scores): string {
        $this->formater-format($scores);
    }

}