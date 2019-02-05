<?php

namespace App\Http\Controllers;

class LinksController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('links.index');
    }
}
