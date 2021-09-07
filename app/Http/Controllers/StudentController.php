<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassM;
use App\Models\formality;
use App\Models\Scholarship;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function list(){
        $student= Student::getStudent();
        return view('manage/student/list',['student'=>$student]);
    }

    function create(){
        $class= ClassM::getClass();
        $formality= formality::getFormality();
        $scholarship = Scholarship::getScholarship();
        return view('manage.student.create')->with('class',$class)->with('formality',$formality)->with('scholarship',$scholarship);
    }

    function createStudent(Request $request){
        $name=$request -> input('name');
        $gender=$request ->input('gender');
        $address=$request -> input('address');
        $dob = $request ->input('dob');
        $phone=$request ->input('phone');
        $MaL=$request -> input('MaL');
        $MaHTN=$request -> input('MaHTN');
        $MaHB=$request ->input('MaHB');
        $rs=Student::createStudent($name,$gender,$address,$dob,$phone,$MaL,$MaHTN,$MaHB);
        if($rs == true){
            return redirect('/manage/student/list');
        }
        else{
            return redirect()->back();
        }
    }

    function edit($MaSV){
        $student= Student::getStudent($MaSV)[0];
        $class= ClassM::getClass();
        $formality= formality::getFormality();
        $scholarship = Scholarship::getScholarship();
        return view('manage.student.edit',['student'=>$student,'class'=>$class,'formality'=>$formality,'scholarship'=>$scholarship]);
    }

    function editStudent(Request $request, $MaSV){
        $name = $request -> input('name');
        $gender = $request ->input('gender');
        $address = $request -> input('address');
        $dob = $request ->input('dob');
        $phone = $request ->input('phone');
        $MaL = $request -> input('MaL');
        $MaHTN = $request -> input('MaHTN');
        $MaHB = $request ->input('MaHB');
        $rs = Student::createStudent($MaSV,$name,$gender,$address,$dob,$phone,$MaL,$MaHTN,$MaHB);
        if($rs == true){
            return redirect('/manage/student/list');
        }
        else{
            return redirect()->back();
        }
    }

    function deleteStudent($MaSV){
        $rs = Student::deleteStudent($MaSV);
        if($rs == 0){
            return "Xoa that bai";
        }
        else{
            return redirect("manage/class/list");
        }
    }
}
