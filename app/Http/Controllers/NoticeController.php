<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoticeController extends Controller
{

    public function index()
    {
        $type = auth()->user()->type;
        $notices = Notice::orderBy('created_at', 'desc')->get();
        return view('notices.index', compact('type', 'notices'));
    }

    public function create()
    {
        $type = auth()->user()->type;
        return view('notices.create', compact('type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'mimes:jpeg,jpg,png,doc,docx,pdf',
        ]);

        $notice = Notice::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        if (File::isFile($request['file'])) {
            $extention = $request->file->extension();
            $fileName = 'notice_' . $notice->id . '.' . $request->file->extension();
            $request->file->move(public_path('notice-files'), $fileName);

            $notice->file_path = 'notice-files/' . $fileName;
            $notice->file_extension = $extention;
            $notice->update();
        }
        return redirect()->route('notice.index')->with('success', 'Notice Stored Successfully.');
    }

    public function download(Notice $notice)
    {
        $file = public_path() . '/notice-files/notice_' . $notice->id . '.' . $notice->file_extension;
        $file_name = 'notice_' . $notice->id . '.' . $notice->file_extension;
        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $file_name, $headers);
    }

    public function edit(Notice $notice)
    {
        $type = auth()->user()->type;
        return view('notices.edit', compact('type', 'notice'));
    }

    public function update(Request $request, Notice $notice)
    {
        if (File::isFile($request['file'])) {
            $request->validate([
                'file' => 'mimes:jpeg,jpg,png,doc,docx,pdf',
            ]);

            if ($notice->file_path) {
                if (File::exists(public_path($notice->file_path))) {
                    File::delete(public_path($notice->file_path));
                }
            }
            $extention = $request->file->extension();
            $fileName = 'notice_' . $notice->id . '.' . $request->file->extension();
            $request->file->move(public_path('notice-files'), $fileName);

            $notice->title = $request->title;
            $notice->description = $request->description;
            $notice->file_path = 'notice-files/' . $fileName;
            $notice->file_extension = $extention;
            $notice->update();
        } else {
            $notice->title = $request->title;
            $notice->description = $request->description;
            $notice->update();
        }
        return redirect()->route('notice.index')->with('success', 'Notice Updated Successfully');
    }

    public function destroy(Notice $notice)
    {
        if ($notice->file_path) {
            if (File::exists(public_path($notice->file_path))) {
                File::delete(public_path($notice->file_path));
            }
        }
        $notice->delete();
        return redirect()->route('notice.index')->with('danger', 'Notice Deleted Successfully');
    }

    public function show_all()
    {
        $notices = Notice::orderBy('created_at', 'desc')->get();
        return view('notices.frontend.index', compact('notices'));
    }

    public function show(Notice $notice)
    {
        return view('notices.frontend.details', compact('notice'));
    }
}
