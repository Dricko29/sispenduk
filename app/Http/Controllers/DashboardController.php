<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirect(User $user)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return to_route('admin.dashboard');
        }elseif ($user->hasRole('operator')) {
            return to_route('operator.dashboard');
        }else{
            return to_route('dashboard');
        }
    }
}