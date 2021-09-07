<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Accountant extends Model
{
    use HasFactory;
    use HasFactory;
    static function getAll(){
        return DB::select('SELECT * FROM accountant');
    }

}
