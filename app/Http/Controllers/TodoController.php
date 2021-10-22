<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Meta;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }    
}
