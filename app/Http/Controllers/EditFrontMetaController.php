<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Meta;
use App\Settings;

class EditFrontMetaController extends Controller
{
    public function index () 
    {
        $frontend = settings::all();
        return view('welcome',[
            'settings' => $frontend,
        ]);
    }
}
