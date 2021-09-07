<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\CourseFee;
use Illuminate\Http\Request;

class CoursefeeController extends Controller
{
    public function list(){
        $coursefee = CourseFee::getCourseFee();
        return view('manage.coursefee.list',['coursefee'=>$coursefee]);
    }

    function create(){
        $branch = Branch::getBranch;
        return view('manage.coursefee.create',['branch'=>$branch]);
    }

    function createcf(Request $request){
        $MaN = $request -> input('MaN');
        $SoHP=$request -> input('SoHP');
        $rs=CourseFee::createCourseFee($MaN,$SoHP);
        if($rs == true){
            return redirect('/');
        }
        else{
            return redirect()->back();
        }
    }

    function edit($MaHP){
        $coursefee = CourseFee::getCourseFee();
        return view('manage.coursefee.edit',['coursefee'=>$coursefee]);
    }

    function editCoursefee(Request $request,$MaHP){
        $MaN=$request ->input('MaN');
        $SoHP=$request ->input('SoHP');
        $rs=CourseFee::editCoursefee($MaHP,$MaN,$SoHP);
        if($rs == 0){
            return redirect('/manage/coursefee/list');
        }
        else{
            return redirect()->back();
        }
    }

    function deleteCoursefee($MaHP){
        $rs = CourseFee::deleteCoursefee($MaHP);
        if($rs == 0){
            return "Xoa that bai";
        }
        else{
            return redirect("manage/coursefee/list");
        }
    }
    //
}
