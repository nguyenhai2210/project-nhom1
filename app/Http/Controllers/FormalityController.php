<?php

namespace App\Http\Controllers;

use App\Models\formality;
use Illuminate\Http\Request;

class FormalityController extends Controller
{
    //
    public function list(){
        $formality= formality::getFormality();
        return view('manage/formality/list',['formality'=>$formality]);
    }

    function create(Request $request){
        $name=$request -> input('name');
        $num = $request ->input('num');
        $rs=formality::createFormality($name,$num);
        if($rs == true){
            return redirect('/');
        }
        else{
            return redirect()->back();
        }
    }

    function edit($MaHTN){
        $formality = formality::getFormality();
        return view('manage.formality.edit',['formality'=>$formality]);
    }

    function editFormality(Request $request,$MaHTN){
        $name=$request -> input('name');
        $num = $request ->input('num');
        $rs=formality::editFormality($MaHTN,$name,$num);
        if($rs == 0){
            return redirect('/manage/formality/list');
        }
        else{
            return redirect()->back();
        }
    }

    function deleteFormality($MaHTN){
        $rs = formality::deleteFormality($MaHTN);
        if($rs == 0){
            return "Xoa that bai";
        }
        else{
            return redirect("manage/formality/list");
        }
    }
}
