<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moviesController extends Controller
{
    public function movies()
    {
        return view('movies');
    }

    public function AdminPanel()
    {
        return view('AdminPanel');
    }

}