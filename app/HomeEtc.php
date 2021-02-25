<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeEtc extends Model
{
    Protected $table = 'home_etc';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false; 
}
