<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterExampleRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student_list', compact('students'));
//        return view('student_list',['students'=>$students]);
    }

    public function registerForm()
    {
        return view('register');
    }

    public function register(RegisterExampleRequest $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->class = $request->class;
        $student->save();
        return redirect()->route('studentList');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('studentList');
    }

    public function editForm($id)
    {
        $student = Student::find($id);
        return view('edit', ['student'=>$student]);
    }

    public function update(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->class = $request->class;
        $student->save();
        return redirect()->route('studentList');
    }

    public function checkValidation(RegisterExampleRequest $request)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('register', compact('success'));
    }
}
