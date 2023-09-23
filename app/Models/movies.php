<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    protected $demo = [
        'movie_name',
        'release_date',
        'description',
        'image_url',
        'video_url',
    ];
}