<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Photo $photo)
    {
        //
    }

    public function edit(Photo $photo)
    {
        //
    }

    public function update(Request $request, Photo $photo)
    {
        //
    }

    public function destroy(Photo $photo)
    {
        if ($photo->path) {
            if (File::exists(public_path($photo->path))) {
                File::delete(public_path($photo->path));
            }
        }
        $photo->delete();
        return redirect()->back()->with('danger', 'Photo Deleted Successfully');
    }
}
