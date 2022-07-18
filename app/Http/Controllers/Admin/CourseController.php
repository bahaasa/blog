<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $data['courses']=Course::select('id','name','phone' ,'img')
        ->orderBy('id' ,'DESC')->get();
        return view('admin.courses.index')->with($data);
    }
    public function create(){
        return view('admin.courses.create');
    }


   public function store(Request  $request)
{
   $data =$request->validate([
    'name'=>'required|string|max:20',
    'spec'=>'required|string|max:50',
    'phone'=>'nullable|string|max:20',
    'img'=>'required|image|mimes:jpg,jpeg,png',
   ]);
  
   $new_name =$data['img']->hashName();
  Image::make($data['img'])->resize(50,50)->save(public_path('uploads/courses/'.$new_name));
  $data['img'] =$new_name;
   Course::create($data);
   return redirect(route('admin.courses.index'));
}


public function edit($id)
{
    $data['trainer'] =Course::findOrFail($id);
    return view('admin.courses.edit')->with($data);
}


public function update(Request  $request)
{
   $data =$request->validate([
    'name'=>'required|string|max:20',
    'spec'=>'required|string|max:50',
    'phone'=>'nullable|string|max:20',
    'img'=>'nullable|image|mimes:jpg,jpeg,png',
   ]);
$old_name =Course::findOrFail($request->id)->img;
if ($request->hasFile('img')) {
    Storage::disk('uploads')->delete('courses/'.$old_name);
    $new_name =$data['img']->hashName();
    Image::make($data['img'])->resize(50,50)->save(public_path('uploads/courses/'.$new_name));
    $data['img'] =$new_name;
}
else {
    $data['img']=$old_name;
}

   
   Course::findOrFail($request->id)->update($data);
   return back();
}




public function delete($id)
{ 
    $old_name =Course::findOrFail($id)->img;
    Storage::disk('uploads')->delete('courses/'.$old_name);


    Course::findOrFail($id)->delete();
    return back();
}


}
