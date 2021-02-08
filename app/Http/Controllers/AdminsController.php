<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    //
    public function Index()
    {
        return view('admin.index');
    }
}
