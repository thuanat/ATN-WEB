<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function new(){
        return view('client.page.new');
    }
}
