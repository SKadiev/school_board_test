<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {
   
    public function index($id) {
        $sttudent = App::get('database')->selectById('student', $id);

        return view('student', compact('users'));
    }

    
    public function store() {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}