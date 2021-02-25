<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationModel extends Model
{
    Protected $table = 'information_etc';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false; 
}
