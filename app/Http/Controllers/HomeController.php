<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Displays the index page of the app
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
}
