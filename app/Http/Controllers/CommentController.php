<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
    //

    public function store(Request $request){
        if(\App\Comment::create($request->all())){
            return redirect()->back();
        }else{
            return redirect()->back()->withInput()->withErrors('failed to post');
        }
    }
}
