<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list(){
        $course= Course::getCourse();
        return view('manage.course.list',['course'=>$course]);
    }

    function create(Request $request){
        //$Mak = $request -> input('Mak');
        $Name=$request -> input('name');
        $rs=Course::createCourse($Name);
        if($rs == true){
            return redirect('manage/course/create');
        }
        else{
            return redirect()->back();
        }
    }

    function edit($Mak){
        $course = Course::getCourse();
        return view('manage.course.edit',['course'=>$course]);
    }

    function editCourse(Request $request,$Mak){
        $Mak=$request ->input('Mak');
        $Name=$request ->input('name');
        $rs=Course::editCourse($Mak,$Name);
        if($rs == 0){
            return redirect('/manage/course/list');
        }
        else{
            return redirect()->back();
        }
    }

    function deleteCourse($MaK){
        $rs = Course::deleteCourse($MaK);
        if($rs == 0){
            return "Xoa that bai";
        }
        else{
            return redirect("manage/course/list");
        }
    }
}
