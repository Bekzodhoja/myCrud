<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use Validator;



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
     
        
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);


        $student = $request->all();
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profilephoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilephoto);
            $student['photo'] = "$profilephoto";
        }
    
        Student::create($student);
     
        return redirect()->route('students.index');

    //     $photoName = time().'.'.$request->photo->extension();

    //     $request->photo->move(public_path('photos'), $photoName);
    //     $student->save();
    //    return redirect()->back()->with('photo',$photoName);
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
        $input = $request->all();
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profilephoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilephoto);
            $input['photo'] = "$profilephoto";
        }else{
            unset($input['image']);
        }
          
        $student->update($input);
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
