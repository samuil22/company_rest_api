<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtc;
class HomeEtcController extends Controller
{
    function onSelectVideo(){
        $result = HomeEtc::select('video_description','video_url')->get();
        return $result;
    }
    function onSelectProject(){
        $result = HomeEtc::select('total_project','total_client')->get();
        return $result;
    }
    function onSelectTecDesc(){
        $result = HomeEtc::select('tech_decscription')->get();
        return $result;
    }
    function onSelectTopTitle(){
        $result = HomeEtc::select('home_title','home_subtitle')->get();
        return $result;
    }
}
