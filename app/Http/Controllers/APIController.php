<?php

namespace App\Http\Controllers;
use App\Models\sport;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function create (Request $req){
        $s= new sport();
        $s->title=$req->title;
        $s->description=$req->description;
        $s->postdate=$req->postdate;
        $s->type=$req->type;
        $s->createdby=$req->createdby;
        $s->save();
        return response()->json(["msg"=>"Successfully Added"]);
    }
    
}
