<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    //
    public function index(){
        return view('admin/photo/index');
        #return 'this is an index page of picture management';

    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $newImage = new \App\Photo;
        $newImage->title = $request->get('title');
        $newImage->name = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $newImage->name);
        return back()
    		->with('success','Image Uploaded successfully.')
    		->with('path',$newImage->name);
    

    }
}
