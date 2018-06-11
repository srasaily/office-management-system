<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //dd($request);
        if ($request->image) {
            $imagePath = Storage::disk('public')->put('images', $request->image);
        }
        else {
            $imagePath = null;
        }
        //$imagePath = $request->image->store('public/images'); //storage/app/public/images. Here the path storage/app is default so no need to mention
        $data = $request->all();
        $data['image'] = $imagePath;
        if (User::create($data)) {
            flash('User created successfully!')->success();
        } else {
            flash('Could not create user!')->error();
        }

        return redirect()->route('users.index'); //return listing page ie. index view
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        //dd($user);

        //dd($user);
        return view('users.show', compact('user'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Users               $users
     * @return \Illuminate\Http\Response
     */
    public function update($id, UserRequest $request)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->delete()){
            flash('User deleted successfully!')->success();
        } else{
            flash('Could not delete user!')->error();
        }
        return redirect()->route('users.index');
    }
}
