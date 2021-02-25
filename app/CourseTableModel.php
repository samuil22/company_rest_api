<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTableModel extends Model
{
    Protected $table = 'course_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false; 
}
