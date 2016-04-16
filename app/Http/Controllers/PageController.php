<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    /**
     * Show the home page
     *
     * @return view
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the about page
     *
     * @return view
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the contact page
     *
     * @return view
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
