<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * C
     * R
     * U
     * D
     */

     //Read
     //Read keseluruhan data
     public function index(){
         $students = Student::all();
         return view('students.index', compact('students'));
     }
     //Read satuan data
     public function show(Student $student){
         return view('students.show', compact('student'));
     }

     //Create
     //1. ke tampilan
     public function create(){
         return view('students.create');
     }
     //2. kirimin data
     public function store(Request $request){
         $request->validate([
             'name' => 'required|min:5|max:20',
             'phone' => 'required|max:12',
             'address' => 'required|min:5|max:200'
         ]);
         Student::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'slug' => \Str::slug($request->name)
         ]);
         return redirect('/');
     }

     //Edit
     //1. lihat satuan data
     public function edit(Student $student){
         return view('students.edit', compact('student'));
     }
     //2. update satuan data
     public function update(Request $request, Student $student){
        $request->validate([
            'name' => 'required|min:5|max:20',
            'phone' => 'required|max:12',
            'address' => 'required|min:5|max:200'
        ]);
         $student->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'slug' => \Str::slug($request->name)
         ]);
         return redirect('/');
     }

     public function delete(Student $student){
         $student->delete();
         return redirect('/');
     }
}
