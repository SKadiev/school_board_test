<?php

namespace App\Models;

class Student {

    protected $id;
    protected $name;
    protected $grades = [];
    protected $avarageResults;
    protected $finalResult;


    public function __construct($id,$name, $grades, $avarageResults, $finalResult) {
        $this->id = $name;
        $this->name = $name;
        $this->grades = $grades;
        $this->avarageResults = $avarageResults;
        $this->finalResult = $finalResult;

    }

    public function studentData () {
        $statsData = [];
        $statsData['studentId'] =   $this->$id;
        $statsData['studentName'] =  $this->name;
        $statsData['average'] =  $this->avarageResults;
        $statsData['final'] = $this->finalResult;
        $statsData['grades'] = $this->grades;
        return  $statsData;
    }

   

}