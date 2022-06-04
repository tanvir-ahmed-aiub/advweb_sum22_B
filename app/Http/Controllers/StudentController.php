<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function details($id){
        $name="Student $id";
        $dob ="4456";
        return view('student.details')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
    public function list(){
        $students = [];
        for($i=1;$i<=10;$i++){
            $st = array(
                "id"=>$i,
                "name"=>"Student $i",
                "dob"=>"1212"
            );
            $students[] = (object)$st;
        }
        
        return view('student.list')->with('students',$students);

    }
    function create(){
        return view('student.create');
    }
    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:10|min:3",
                "id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                "dob"=>"required",
                "email"=>"required|",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);

        return "Form submitted";
        
    }
}
