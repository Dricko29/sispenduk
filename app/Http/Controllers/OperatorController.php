<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function dashboard()
    {
        return view('app.operator.dashboard');
    }
}