<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
