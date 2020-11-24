<?php

namespace App\Controllers;

use App\Core\App;

class StudentController {
   
    public function index($id) {
        $student = App::get('studentService')->getStudentInfo($id);

        return;

    }

    
   
}