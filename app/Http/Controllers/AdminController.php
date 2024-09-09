<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // This method is for adding new members
    public function add_member() {
        return view('admin.add_member');
    }

    // This method is for uploadin new members in database
    public function upload_member(Request $request){
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;        
        $data->user_type = $request->user_type;
        $data->phone = $request->phone;
        $data->password = $request->password;
        $data->is_active = $request->is_active;
        $data->save();

        toastr()->closeButton()->success('Member Added Successfully');

        return redirect()->back();
    }

    // Show all members list
    public function view_members() {

        $member = User::paginate(12);
        return view ('admin.view_members', compact('member'));
    }

    // Delete member from members list
    public function delete_product($id) {

        $data = User::find($id);
        $data->delete();

        return redirect()->back();
    }
}
