<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newDataModel;
class newDataController extends Controller
{
    function onSelect(){
        $request = newDataModel::all();
        return $request;
    }
}