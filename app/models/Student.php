<?php

namespace App\Models;

class CsmbBoard implements Board {

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

   

}