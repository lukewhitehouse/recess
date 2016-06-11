<?php

namespace App\Http\Controllers;

use App\Holiday;
use App\Http\Requests;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get currently logged in user
        $user = \Auth::user();

        // Get all holidays for current user
        $holidays = Holiday::where('user_id', $user->id)->get();

        return view('account.index')->with([
            'holidays' => $holidays,
            'user' => $user
        ]);
    }
}
