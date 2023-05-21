<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request)
    {
        return View('index');
    }

    public function progress(Request $request)
    {
        return View('progress');
    }

    public function success(Request $request)
    {
        return View('success');
    }

    public function error(Request $request)
    {
        return View('error');
    }
}
