<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Photo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('position')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $max_position = User::max('position');
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'designation' => $request->designation,
            'status' => $request->status,
            'password' => Hash::make($request->password),
            'position' => $max_position + 1,
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->type = $request->type;
        $user->status = $request->status;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->update();
        return redirect()->route('admin.user.index')->with('success','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('danger','User Deleted Successfully');
    }

    public function sort(Request $request)
    {
        $posts = User::all();

        foreach ($posts as $post) {
            foreach ($request->users as $user) {
                if ($user['id'] == $post->id) {
                    $post->update(['position' => $user['position']]);
                }
            }
        }

        return response('Updated Successfully.', 200);
    }

    public function profile(User $user)
    {
        $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
        return view('frontend.people.teacher.profile' , compact('user' , 'photos'));
    }
}
