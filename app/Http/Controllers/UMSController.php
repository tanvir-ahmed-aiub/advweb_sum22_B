<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMSStudent;
use App\Models\UMSDepartment;

class UMSController extends Controller
{
    //
    function list(){
        $students = UMSStudent::select('name','d_id')->get();
        return $students;

    }
    function department()
    {
        $id=1;
        $dept = UMSDepartment::where('id',$id)->first();
        return $dept->students;
    }
    function create()
    {
        
        return view('UMS.student.create');
    }
    function createSubmit(Request $req){
        $this->validate($req,[
            "id"=>"required|unique:students_info,user_id"
        ]);

        $s = new UMSStudent();
        $s->name = $req->name;
        $s->user_id=$req->id;
        $s->username = $req->id;
        $s->password = $req->password;
        $s->dob = $req->dob;
        $s->cgpa=2.65;
        $s->d_id = 1;
        $s->pro_pic = "";
        $s->save();
        session()->flash('msg','successfull');
        return back();

    }
    function login(){
        return view('UMS.student.login');
    }
    function loginSubmit(Request $req)
    {
        $this->validate($req,[
            "uname"=>"required|exists:students_info,user_id",
            "pass"=>"required"
        ]);
        $user = UMSStudent::where('user_id',$req->uname)
                            ->where('password',$req->pass)->first();

        if($user){
            //session()->flash('msg','User Exists');
            session()->put('logged',$user->user_id);
            return redirect()->route('ums.dash');

        }
        else {
            session()->flash('msg','User not valid');
        return back();
        }

    }
    function dashboard(){

        $user = UMSStudent::where('user_id',session()->get('logged'))->first();
        return view('UMS.student.dashboard')->with('user',$user);
    }
}


