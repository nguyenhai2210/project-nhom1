<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\ClassM;
use App\Models\Course;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    //
    public function list(){
        $class= ClassM::getClass();
        return view('manage/class/list',['class'=>$class]);
    }

    function create(){
        $branch = Branch::getAllBranch();
        $course = Course::getCourse();
        return view('manage.class.create',['course'=>$course,'branch'=>$branch]);
    }

    function createClass(Request $request){
        $MaL=$request -> input('MaL');
        $name=$request -> input('name');
        $Mak=$request -> input('Mak');
        $MaN=$request -> input('MaN');
        $number=$request -> input('number');
        $rs=ClassM::createClass($MaL,$name,$Mak,$MaN,$number);
        if($rs == true){
            return redirect('/manage/class/list');
        }
        else{
            return redirect()->back();
        }
    }
    
    function edit($MaL){
        $class = ClassM::get($MaL)[0];
        $branch = Branch::getAllBranch();
        $course = Course::getCourse();
        return view('manage.class.edit',['course'=>$course,'branch'=>$branch]);
    }

    function editClass(Request $request, $MaL){
        $MaL=$request -> input('MaL');
        $name=$request -> input('name');
        $Mak=$request -> input('Mak');
        $MaN=$request -> input('MaN');
        $number=$request -> input('number');
        $rs=ClassM::editClass($MaL,$name,$Mak,$MaN,$number);
        if($rs == true){
            return redirect('/manage/class/list');
        }
        else{
            return redirect()->back();
        }
    }

    function deleteClass($MaL){
        $rs = ClassM::deleteClass($MaL);
        if($rs == 0){
            return "Xoa that bai";
        }
        else{
            return redirect("manage/class/list");
        }
    }
}
