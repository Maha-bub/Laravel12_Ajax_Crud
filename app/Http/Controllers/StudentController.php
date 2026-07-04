<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));

    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'min:3'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;

        $student->save();
        return redirect('/student');
    }
}
