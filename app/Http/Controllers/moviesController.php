<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;

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

    public function store(Request $request)
    {
        $data = $request->validate([
            'movie_name' => 'required',
            'release_date' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'video_url' => 'required',
        ]);

        $newmov = movies::create($data);

        return redirect(route('AdminPanel'));

    }

}