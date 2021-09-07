<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coursefee extends Model
{
    use HasFactory;
    static function getCourseFee(){
        return DB::select("SELECT * FROM coursefee");
    }
    static function createCourseFee($MaN,$SoHP){
        return DB::insert("INSERT INTO coursefee VALUES (null,'$MaN','$SoHP')");
    }
    static function editCourseFee($MaHP,$MaN,$SoHP){
        return DB::update("UPDATE coursefee SET MaN='$MaN', SoHP='$SoHP' WHERE MaHP='$MaHP'");
    }
    static function deleteCourseFee($MaHP){
        return DB::delete("DELETE FROM coursefee WHERE MaHP='$MaHP'");
    }
}
