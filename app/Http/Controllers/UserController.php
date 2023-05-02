<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create(Request $request)
    {
        User::createUser($request);
        return redirect()->back()->with('message','User create successfully');
    }

    public function manage()
    {
        return view('admin.user.manage',['users'=>User::orderBy('id','desc')->get()]);
    }
}
