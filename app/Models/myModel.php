<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class myModel extends Model
{
    use HasFactory;
    static function getBranch(){
        return DB::select('SELECT * FROM branch');
    }
    static function createBranch($MaN,$Name){
        return DB::insert("INSERT INTO branch VALUES ('$MaN','$Name')");
    }
}
