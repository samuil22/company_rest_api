<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterModel extends Model
{
    Protected $table = 'footer_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false; 
}
