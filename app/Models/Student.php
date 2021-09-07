<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

static function getStudent(){
        return DB::select('SELECT * FROM student');
    }
    static function createStudent($name,$gender,$address,$dob,$phone,$MaL,$MaHP,$MaHB){
        return DB::insert("INSERT INTO student VALUES (null,'$name','$gender','$address','$dob','$phone','$MaL','$MaHP','$MaHB')");
    }
    static function editStudent($MaSV,$name,$gender,$address,$dob,$phone,$MaL,$MaHP,$MaHB){
        return DB::update("UPDATE student SET name='$name', gender='$gender', address='$address', dob='$dob', phone='$phone', MaL='$MaL', MaHP='$MaHP', MaHB='$MaHB' WHERE MaSV='$MaSV'");
    }
    static function deleteStudent($MaSV){
        return DB::delete("DELETE FROM student WHERE MaL='$MaSV'");
    }
}