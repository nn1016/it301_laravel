<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public $students = array(
        array("b180910033","john",18,'UB'),
        array("b180910035","sarah",20,'Darkhan'),
        array("b180910038","rose",18,'Erdenet')
    );
    public function listStudent(){
        $a = $this->students;
        return view('student', compact('a'));
    }
    public function getStudent($id){
        foreach($this->students as $student)
        {
            if($student[0]==$id)
            return $student;
        }
    }
    public function search(){
        return view('student_search');
    }
    public function searchById(Request $request){
        
        $validated = $request->validate([
            'id' => 'required|max:10|min:10|alpha_num'
        ]);
        $result = array();
        foreach($this->students as $student)
        {
            if($student[0]==$request->id)
            $result = $student;
            break;  
        }
        return view('student_search', compact('result'));
    }
}