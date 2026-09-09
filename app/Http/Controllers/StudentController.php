<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Students = Student::all();
        return view("Students", compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Student");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = [
            'name' => $request->name,
            'course' => $request->course,
            'Email' => $request->Email
        ];
        Student::create($student);
        return redirect('student')->with("Success", "Student Added SuccesFully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $student = Student::find($id);

        return view('Test', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        $student->name = $request->name;
        $student->course = $request->course;
        $student->Email = $request->Email;

        $student->save();

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('student.index');
    }
}
