<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DownloadController extends Controller
{
    public function index()
    {
        $type = auth()->user()->type;
        $downloads = Download::orderBy('created_at', 'desc')->get();
        return view('downloads.index', compact('type', 'downloads'));
    }

    public function create()
    {
        $type = auth()->user()->type;
        return view('downloads.create', compact('type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'mimes:jpeg,jpg,png,doc,docx,pdf,xls,xlsx,docx,zip',
        ]);

        $download = Download::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        if (File::isFile($request['file'])) {
            $extention = $request->file->extension();
            $fileName = 'download_' . $download->id . '.' . $request->file->extension();
            $request->file->move(public_path('downloads'), $fileName);

            $download->file_path = 'downloads/' . $fileName;
            $download->file_extension = $extention;
            $download->update();
        }
        return redirect()->route('download.index')->with('success', 'File Stored Successfully.');
    }

    public function download(Download $download)
    {
        $file = public_path() . '/downloads/download_' . $download->id . '.' . $download->file_extension;
        $file_name = 'download_' . $download->id . '.' . $download->file_extension;
        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $file_name, $headers);
    }

    public function edit(Download $download)
    {
        $type = auth()->user()->type;
        return view('downloads.edit', compact('type', 'download'));
    }

    public function update(Request $request, Download $download)
    {
        if (File::isFile($request['file'])) {
            $request->validate([
                'file' => 'mimes:jpeg,jpg,png,doc,docx,pdf,xls,xlsx,docx,zip',
            ]);

            if ($download->file_path) {
                if (File::exists(public_path($download->file_path))) {
                    File::delete(public_path($download->file_path));
                }
            }
            $extention = $request->file->extension();
            $fileName = 'download_' . $download->id . '.' . $request->file->extension();
            $request->file->move(public_path('downloads'), $fileName);

            $download->title = $request->title;
            $download->description = $request->description;
            $download->file_path = 'notice-files/' . $fileName;
            $download->file_extension = $extention;
            $download->update();
        } else {
            $download->title = $request->title;
            $download->description = $request->description;
            $download->update();
        }
        return redirect()->route('download.index')->with('success', 'File Updated Successfully');
    }

    public function destroy(Download $download)
    {
        if ($download->file_path) {
            if (File::exists(public_path($download->file_path))) {
                File::delete(public_path($download->file_path));
            }
        }
        $download->delete();
        return redirect()->route('download.index')->with('danger', 'File Deleted Successfully');
    }

    //Frontend functions
    public function show_all()
    {
        $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
        $downloads = Download::orderBy('created_at', 'desc')->get();
        return view('frontend.downloads.index', compact('downloads' , 'photos'));
    }

}
