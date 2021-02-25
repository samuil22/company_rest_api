<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactTableModel extends Model
{
    Protected $table = 'contact_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false; 
}
