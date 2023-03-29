<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $student= new Student;
        $student->name = $request->name;
        $student->address= $request->address;
        $student->phone= $request->phone;
        $student->save();
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
      $student=Student::find($student->id);
      return view('students.show',compact('student'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
    Student::find('id');
    return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ]);
      Student::find($student->id)->update([
        'name'=>request('name'),
        'address'=>request('address'),
        'phone'=>request('phone'),
      ]);
       return redirect()->route('students.index' ,compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student= Student::find($student->id);
        $student->delete();
        return redirect()->back();
    }
}
