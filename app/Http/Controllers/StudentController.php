<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use mysql_xdevapi\Session;

class StudentController extends Controller
{
    public function create_student()
    {
        $students = Student::all();

        return view('student_registration.create_student',compact('students'));
    }
    public function registration_student(Request $request)
    {
//        $request->validate([
//            'name'=>'required',
//            'degree_name'=>'required',
//            'institute'=>'required',
//            'passing_year'=>'required',
//            'cgpa'=>'required',
//        ]);
        $student = new Student();

        $student->name = $request->name;
        $student->	degree_name	 = $request->degree_name	;
        $student->institute = $request->institute;
        $student->passing_year	 = $request->passing_year;
        $student->cgpa = $request->cgpa;
        $student->created_by = Auth::user()->getAuthIdentifier();
        $student->save();
//        dd($student);
////        Session::flash('success', 'Registration successful!');
        return redirect()->route('create.student')->with('reg','Registration succesfully');
    }
    public function edit_student($id)
    {
        $student = Student::find($id);
        return view('student_registration.update',compact('student','id'));
        //return redirect()->route('create.student',compact('student','id'));
    }
    public function update_student(Request $request,$id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->degree_name = $request->degree_name;
        $student->institute = $request->institute;
        $student->passing_year	 = $request->passing_year;
        $student->cgpa = $request->cgpa;
        $student->update_by = Auth::user()->getAuthIdentifier();
        $student->save();
        return redirect()->route('create.student',compact('id'));
    }
    public function delete_student($id)
    {
        $student = Student::find($id)->delete();
        return redirect()->route('create.student');
    }

}
