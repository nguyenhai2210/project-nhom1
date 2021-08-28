<?php

namespace App\Http\Controllers;

use App\Models\myModel;
use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function home()
    {

        $branch=myModel::getBranch();
        return view('home',['branch'=>$branch]);
    
    }
    function createBranch(Request $request){
        $MaN=$request -> input('MaN');
        $Name=$request -> input('name');
        $rs=myModel::createBranch($MaN,$Name);
        if($rs == true){
            return redirect('/');
        }
        else{
            return redirect()->back();
        }
    }

}
