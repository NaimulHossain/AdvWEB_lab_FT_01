<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMSStudents;
use App\Models\UMSdepartment;

class UMSController extends Controller
{
    //
    function list(){
        $student = UMSStudents::select ('s_name','d_id')->get();
        return $student;

    }
    function department(){
        $id=1;
        $dept = UMSdepartment::where('d_id',$id)->first();
        return $dept->studentss;

    }
}
