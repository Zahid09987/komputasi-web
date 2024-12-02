<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        $posts = Post::latest()->take(3)->get();

        return view('home', compact('features', 'posts'));
    }
}
