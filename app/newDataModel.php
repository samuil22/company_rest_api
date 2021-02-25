<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class newDataModel extends Model
{
    protected $table = 'new_database';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false;
}