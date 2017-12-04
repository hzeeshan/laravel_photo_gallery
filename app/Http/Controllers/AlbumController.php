<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;
use Image;
 
class AlbumController extends Controller
{
    public function index() {

    	$albums = Album::with('photos')->get();
        return view('albums.index', compact('albums'));
    }

    public function create() {

    	return view('albums.create');
    }

    public function store(Request $request) {

    	$this->validate($request, [

    		'name' => 'required',
    		'description' => 'required',
            'cover_image' => 'required|max:1999'


    	]);

    	$album = new Album;

        $album->name = $request->name;
        $album->description = $request->description;

        if($request->hasFile('cover_image')) {

           $image = $request->file('cover_image');
           $filename = time() . '.' . $image->getClientOriginalExtension();
           $location = public_path('cover_images/' . $filename);
           Image::make($image)->save($location);
           $album->cover_image = $filename;
            
        } 

        $album->save();
        return redirect()->back()->with('message', 'Added Successfully');
    }

    public function show($id) {

       // $album = Album::find($id);
        $album = Album::with('photos')->find($id);
        //$photos = Photo::where($id, 'album_id');
        return view('albums.show', compact('album'));
    }


}
