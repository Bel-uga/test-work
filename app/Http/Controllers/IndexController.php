<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
}