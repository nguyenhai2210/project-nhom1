<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;
    static function getCourse(){
        return DB::select("SELECT * FROM course");
    }
    static function createCourse($name){
        return DB::insert("INSERT INTO course VALUES (null,'$name')");
    }
    static function editCourse($Mak,$name){
        return DB::update("UPDATE course SET Mak='$Mak', name='$name'");
    }
    static function deleteCourse($Mak){
        return DB::delete("DELETE FROM course WHERE Mak='$Mak'");
    }
}

