<?php

namespace App\Models;
use App\Models\Board;

class BoardFactory {


    public function getBoard($boardType) : Board {
        switch ($boardType) {
            case 'CsmBoard' : App::get('CsmBoard'); break;
            case 'CsmbBoard' : App::get('CsmbBoard'); break;

        }
    }
    

}