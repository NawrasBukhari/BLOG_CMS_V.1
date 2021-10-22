<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ImageUploadController extends Model
{
    public function create()
    {
        return view('upload');
    }
    public function store(Request $request)
    {
        dd($request);
    }

}
