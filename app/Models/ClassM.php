<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClassM extends Model
{
    use HasFactory;
    
    static function getClass(){
        return DB::select('SELECT * FROM class');
    }
    static function createClass($MaL,$name,$Mak,$MaN,$number){
        return DB::insert("INSERT INTO class VALUES ('$MaL','$name','$Mak','$MaN','$number')");
    }
    static function editClass($MaL,$name,$Mak,$MaN,$number){
        return DB::update("UPDATE class SET MaL='$MaL', NameClass='$name', Mak='$Mak', MaN='$MaN', number='$number' WHERE MaL='$MaL'");
    }
    static function deleteClass($MaL){
        return DB::delete("DELETE FROM class WHERE MaL='$MaL'");
    }
}
