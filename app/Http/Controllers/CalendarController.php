<?php

namespace App\Http\Controllers;

class CalendarController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('calendar.index');
    }
}
