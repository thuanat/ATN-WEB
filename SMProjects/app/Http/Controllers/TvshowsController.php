<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TvshowsController extends Controller
{
    public function tvshows(){
        return view('client.page.tvshows');
    }
}
