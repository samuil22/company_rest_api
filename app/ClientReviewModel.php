<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientReviewModel extends Model
{
    Protected $table = 'client_review';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamp = false; 
}
