<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;



class StudentController extends Controller
{
    public function createStudentForm(Request $request) {
        return view('form');
      }
    
      // Store Form data in database
    public function StudentForm(Request $request) {
    
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'address'=>'required',
              'message' => 'required'
           ]);
    
          //  Store data in database
          Student::create($request->all());

          return back()->with('success', 'Your form has been submitted.');
     }

     public function read(){
      $student = Student::all();
      return view('read', ['student'=> $student]);
     }
}
