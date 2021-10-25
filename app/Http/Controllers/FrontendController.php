<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Frontend;

class FrontendController extends Controller
{

    public function index()
    {

        $frontend = Frontend::all();
        return view('home', compact('frontend'));
    }
}
