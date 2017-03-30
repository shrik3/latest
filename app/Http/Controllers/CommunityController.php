<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommunityController extends Controller
{
    //
    public function index(){
        //return view('community/index')->withCommunities(\App\Community::all());
        $results = \App\Community::all();
        foreach ($results as $result){
            $icon_path = \App\Community::find($result['id'])->icon['image'];
            $icon_path = url('images/'.$icon_path.'.jpg');
            $result['icon'] = $icon_path;
        }
        $json = json_encode($results);
        return str_replace("\\/" , "/" , $json);

    }

    public function show($id)
    {
        $result = \App\Community::find($id);
        $icon_path = \App\Community::find($id)->icon;
        $result['icon']= url('images/'.$icon_path['image'].'.jpg');
        $json = json_encode($result);
        return str_replace("\\/" , "/" , $json);

    }
}
