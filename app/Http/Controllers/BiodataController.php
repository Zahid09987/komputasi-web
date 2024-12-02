<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function home() {
        return "Welcome to my first webpage";
    }
    public function about() {
        return "This is the page where you can see about him";
    }
}
