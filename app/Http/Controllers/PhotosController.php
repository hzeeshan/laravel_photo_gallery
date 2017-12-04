<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;
use Image;

class PhotosController extends Controller
{
    public function create($album_id) {

     $photo = Album::find($album_id);
     return view('photos.create', compact('photo'));

    }


     public function store(Request $request) {

    	$this->validate($request, [

    		'title' => 'required',
    		'description' => 'required',
            'photo' => 'required|max:1999'


    	]);

    	$photo = new Photo;

        $photo->title = $request->title;
        $photo->description = $request->description;
        $photo->album_id = $request->input('album_id');

        if($request->hasFile('photo')) {

           $image = $request->file('photo');
           $filename = time() . '.' . $image->getClientOriginalExtension();
           $location = public_path('photos/' . $filename);
           Image::make($image)->save($location);
           $photo->photo = $filename;
            
        } 

        $photo->save();
        return redirect()->back()->with('message', 'Photo Added Successfully');
    }

    
}
