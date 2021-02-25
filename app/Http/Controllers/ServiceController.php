<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceModel;
class ServiceController extends Controller
{
    function onService3(){
        $result = ServiceModel::limit(3)->get();
        return $result;
    }
    function onSelect(){
        $result = ServiceModel::all();
        return $result;
    }
}
