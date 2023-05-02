<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class AdminEnrollController extends Controller
{
    public function index()
    {

        return view('admin.enroll.index',['enrolls'=>Enroll::orderBy('id','desc')->get()]);
    }

    public function detail($id)
    {
        return view('admin.enroll.detail',['enroll'=>Enroll::find($id)]);
    }

    public function editStatus($id)
    {
        return view('admin.enroll.edit-status',['enroll'=>Enroll::find($id)]);
    }

    public function updateStatus(Request $request, $id)
    {
        Enroll::updateEnrollStatus($request,$id);
        return redirect('admin/manage-enroll')->with('message','Enroll status update successfully');
    }
}
