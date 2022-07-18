<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\SiteContent;
use App\Student;
use App\Test;
use App\Trainer;
class HomepageController extends Controller
{
    public function index(){
        $data['courses_content']= SiteContent::select('content')->where('name','courses')->first();
   $data['banner']= SiteContent::select('content')->where('name','banner')->first();

         $data['courses'] = Course::select('id','name','small_desc' ,'cat_id','trainer_id','img','price')
      ->orderBy('id','desc')
       ->take(3)
        ->get();
        $data['courses_count'] =Course::count();
        $data['trainers_count'] =Trainer::count();
        $data['students_count'] =Student::count();
        //  dd($data['courses']);
         $data['test'] =Test::select('name','spec','img')->get();
      
        return view('front.index')->with($data);
    }
}
