<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->is_role == 2) {
            return view('chef.dashboard');
        } elseif (Auth::user()->is_role == 3) {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('Client.dashboard', $data);
        } elseif (Auth::user()->is_role == 1) {
            $data = []; // Initialiser $data si nécessaire
            return view('Agentmaritime.dashboard', $data);
        }
    }
}
