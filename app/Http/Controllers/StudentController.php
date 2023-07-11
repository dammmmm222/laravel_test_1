<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index(){
       
        $students = DB::table("student")
        ->select('id','name','email','address')
        ->where('id', '>=', 1)
        ->where('id', '<=', 5)
        ->orwhere('id', '=',7)
        ->get();
    //    dd($students);
        return view('student.index',compact('students'));
    }
}
