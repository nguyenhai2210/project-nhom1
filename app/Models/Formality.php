<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class formality extends Model
{
    use HasFactory;
    static function getFormality(){
        return DB::select("SELECT * FROM formality");
    }
    static function createFormality($name,$num){
        return DB::insert("INSERT INTO formality VALUES (null, '$name',$num)");
    }
    static function editFormality($MaHTN,$name,$num){
        return DB::update("UPDATE formality SET Cachthuc ='$name', MucGiam = '$num' WHERE MaHTN= $MaHTN");
    }
    static function deleteFormality($MaHTN){
        return DB::delete("DELETE FROM formality WHERE Mak='$MaHTN'");
    }
}
