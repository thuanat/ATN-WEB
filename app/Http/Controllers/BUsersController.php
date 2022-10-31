<?php

namespace App\Http\Controllers;

use App\Models\Usermanagement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class BUsersController extends Controller
{
    public function Usersindex(){
        $user=Usermanagement::all();
        return view('admin.page.listUsers', compact('user'));
    }

    public function getEditUsers($id){
        $data['users']=Usermanagement::find($id);
        return view('admin.page.editUsers',$data);
    }

    public function postEditUsers(Request $request,$id){
        if($request->isMethod('POST')){
            $validator=Validator::make($request->all(),[
                'password'=>'required',
            ]);

            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $users=Usermanagement::find($id);
            $users->password=Hash::make($request->password);
            $users->save();
            return redirect()->route('admin.users.index')->with('success','Edit password Successfully!');
        }
    }

    public function deleteUsers($id){
        $movie=Usermanagement::find($id);
        $movie->delete();
        return back();
    }
}
