<?php

namespace App\Models;
use App\Core\App;

class BoardFactory {


    public function getBoard($boardType) : Board  {
        switch ($boardType) {
            case 'CsmBoard' :  return App::get('CsmBoard'); break;
            case 'CsmbBoard' : return  App::get('CsmbBoard'); break;

        }
    }
    

}