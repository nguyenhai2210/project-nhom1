<?php

namespace App\Http\Controllers;

use App\Models\Accountant;
use Illuminate\Http\Request;

class AccountantController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');
    }

    public function checkout(){
        return view('manage.checkout');
    }
    //
}
