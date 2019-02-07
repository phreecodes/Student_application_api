<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function update($id, Request $request)
    {
        $student = Student::find($id);
        // return $request->all();
        $student->update($request->all());
        if($student){
            return "Student Record Updated Successfully" . "<br>" . response()->json($student);
        }
    }

    public function delete($id)
    {
        $student = Student::find($id);

        $student->delete();

        return "Student Record Deleted Successfully" . response()->json(null, 204);
    }
}
