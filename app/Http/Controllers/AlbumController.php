<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    public function index()
    {
        $type = auth()->user()->type;
        $albums = Album::orderBy('updated_at' , 'DESC')->get();
        return view('albums.index' , compact('type' , 'albums'));
    }

    public function create()
    {
        $type = auth()->user()->type;
        return view('albums.create' , compact('type'));
    }

    public function store(Request $request)
    {
        $album = Album::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        if ($request->hasfile('file')) {
            $count = 1;
            foreach ($request->file('file') as $file) 
            {
                $fileName = 'photo_' . $album->id .'_' .$count . '.' . $file->extension();
                $file->move(public_path('photos'), $fileName);
                
                Photo::create([
                    'path' => 'photos/' . $fileName,
                    'album_id' => $album->id,
                ]);
                $count++;
            }
        }
        return redirect()->route('album.index')->with('success' , 'Album created Successfully.');
    }

    public function edit(Album $album)
    {
        $type = auth()->user()->type;
        return view('albums.edit' , compact('type' , 'album'));
    }

    public function update(Request $request, Album $album)
    {
        $album->title = $request->title;
        $album->description = $request->description;
        $album->update();
        $max_id_photo = Photo::where('album_id' , $album->id)->orderBy('id' , 'desc')->first();
        if ($request->hasfile('file')) {
            $count = $max_id_photo->id + 1;
            foreach ($request->file('file') as $file) 
            {
                $fileName = 'photo_' . $album->id .'_' .$count . '.' . $file->extension();
                $file->move(public_path('photos'), $fileName);
                
                Photo::create([
                    'path' => 'photos/' . $fileName,
                    'album_id' => $album->id,
                ]);
                $count++;
            }
        }
        return redirect()->back()->with('success' , 'Album Updated Successfully.');
    }

    public function destroy(Album $album)
    {
        if($album->photos)
        {
            foreach ($album->photos as $photo) {
                if ($photo->path) {
                    if (File::exists(public_path($photo->path))) {
                        File::delete(public_path($photo->path));
                    }
                }
            }
        }
        $album->delete();
        return redirect()->route('album.index')->with('danger', 'Album Deleted Successfully');
    }

    public function gallery()
    {
        $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
        $albums = Album::orderBy('updated_at' , 'DESC')->get();
        return view('frontend.gallery' , compact('albums' , 'photos'));
    }
}
