<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    function __construct(){
        $this->middleware('logged.user');
    }
    //
    function create(){
        $depts = Department::all();
        /*$dept = new Department();
        $dept->name="CS";
        $dept->save();*/
        return $depts;
    }
}
