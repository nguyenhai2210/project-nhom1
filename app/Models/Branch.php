<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Branch extends Model
{
    use HasFactory;
    static function getAllBranch(){
        return DB::select('SELECT * FROM branch');
    }
    static function createBranch($MaN,$Name){
        return DB::insert("INSERT INTO branch VALUES ('$MaN','$Name')");
    }
    static function deleteBranch($id){
        return DB::delete("DELETE FROM branch WHERE MaN='$id' ");
    }
    static function getbranch($id){
        return DB::select("SELECT * FROM branch WHERE MaN='$id' ");
        // if(count($branch)==0) return NULL;
        // else return $branch[0];
        
    }
    static function updateBranch($id,$name){
        return DB::update("UPDATE branch SET name='$name' WHERE MaN='$id' ");
    }
    static function getData($id){
        return DB::table('branch')->where ('MaN','=',$id)->get();
    }
}

