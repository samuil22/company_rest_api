<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;
class ProjectController extends Controller
{
    function onSelect3(){
        $result = ProjectModel::limit(3)->get();
        return $result;
    }
    function onSelectAll(){
        $result = ProjectModel::all();
        return $result;
    }
    function onSelectDetails($projectID){
        $id =  $projectID;
        $result = ProjectModel::where(['id'=>$id])->get();
        return $result;
    }
}
