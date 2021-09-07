<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function list()
    {

        $branch=Branch::getAllBranch();
        return view('manage.branch.list',['branch'=>$branch]);
    
    }
    function getData($id){
        return view('manage.branch.update')->with('data',Branch::getData($id));
    }
    function insertBranch(){
        return view('manage.branch.insert');
    }
    function createBranch(Request $request){
        $MaN=$request -> input('MaN');
        $Name=$request -> input('name');
        $rs=Branch::createBranch($MaN,$Name);
        if($rs == true){
            return redirect('/manage/branch/list');
        }
        else{
            return redirect()->back();
        }
    }
    function deleteBranch($id){
        $rs=Branch::deleteBranch($id);
        if($rs==0){
            return "false";
        }
        else{
            return redirect('/');
        }
    }
    function editBranch($id){
        $branch=Branch::getbranch($id);
        return view ('manage.branch.update',['branch'=>$branch]);
    }
    function updateBranch(request $request,$id){
        $id=$request->input('MaN');
        $name=$request->input('name');
        $rs=Branch::updateBranch($id,$name);
        if ($rs){
            return redirect('manage/branch/list');
        }
        else {
            return "false";
        }
    }
    
}
