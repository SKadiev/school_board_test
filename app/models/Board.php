<?php

namespace App\Models;

interface Board {

    public function studentAverage($scores): string;
    public function studentPassed($scores): string;
    public function studentStats($scores): string;

}