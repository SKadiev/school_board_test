<?php

namespace App\Models;

class JsonFormat implements Formater
{
    public function format( $data)
    {
        var_dump('jsonParse');

        return ($data);
        //ran out of time 
    }
}