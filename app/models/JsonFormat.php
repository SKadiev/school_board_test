<?php

namespace App\Models;

class JsonFormat implements Formater
{
    public function format( $data): string
    {

        return $data;
    }
}