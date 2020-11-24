<?php

namespace App\Models;

class XmlFormat implements Formater
{
    public function format( $data): string
    {

        return $data;
    }
}