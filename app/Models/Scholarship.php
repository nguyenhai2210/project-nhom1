<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Scholarship extends Model
{
    use HasFactory;
    static function getScholarship(){
        return DB::select("SELECT * FROM scholarship");
    }
}
