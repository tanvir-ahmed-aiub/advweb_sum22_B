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
}
