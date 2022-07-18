<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Message;
use App\NewsLetter;
use App\Student;
use Validator;
use Illuminate\Http\Request;

class MessageController extends Controller
{

public function newsletter(Request $request){
    $data =$request->validate([

     'email'=>"required|email|max:191",


    ]);
    NewsLetter::create($data);


   
    
}
public function contact(Request $request){
    $data=$request->validate([

      'name'=>'required|string|max:191',
      'email'=>'required|email|max:191',
      'subject'=>'nullable|string|max:191',
      'message'=>'required|string|max:191'

    ]);
    Message::create($data);
  
}
public function enroll(Request $request){
    $data=$request->validate([

      'name'=>'nullable|string|max:191',
      'email'=>'required|email|max:191',
      'course_id'=>'required|exists:courses,id',
      'spec'=>'nullable|string|max:191'

    ]);
   $student = Student::create([
     'name'=>$data['name'],
     'email'=>$data['email'],
     'spec'=>$data['spec'],


    ]);

$student_id= $student->id;


DB::table('course_student')->insert([
    'course_id'=>$data['course_id'],
    'student_id'=>$student_id,







]);


return back();







    

}
}