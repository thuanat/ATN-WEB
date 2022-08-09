<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function Logout(){
        Auth::logout();
        return redirect()->route('client.page.signin');
    }
}
