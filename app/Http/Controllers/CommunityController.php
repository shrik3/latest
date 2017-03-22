<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommunityController extends Controller
{
    //
    public function index(){
        return view('community/index')->withCommunities(\App\Community::all());
    }
    
    public function show($id)
    {
        $result = \App\Community::find($id);
        $json = json_encode($result);
        return $json;

    }
}
