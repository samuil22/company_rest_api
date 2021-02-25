<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationModel;
class InformationController extends Controller
{
    function onSelect(){
        $result = informationModel::all();
        return $result;
    }
}
