<?php

namespace App\Http\Controllers;

use App\User;
use App\Holiday;
use App\Http\Requests;
use Illuminate\Http\Request;

class HolidaysController extends Controller
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
     * Get all meetups and pass to view
     *
     * @return Response
     */
    public function index()
    {
        $user = \Auth::user();

        // Get all holidays for current user
        $holidays = Holiday::where('user_id', $user->id)->get();

        // Show all holidays
        return view('holidays.index')->with('holidays', $holidays);
    }

    /**
     * View single holiday based on 'id' and pass to view
     *
     * @param $id
     * @return Response
     */
    public function show($holiday_id)
    {
        // Get holiday in question
        $holiday = Holiday::findOrFail($holiday_id);

        return view('holidays.show')->with('holiday', $holiday);
    }

    /**
     * Holidays creation form
     *
     * @return Response
     */
    public function create()
    {
        return view('holidays.create');
    }

    /**
     * Store holiday request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $holiday = new Holiday;
        $input = $request->all();

        $holiday->user_id     = \Auth::user()->id;
        $holiday->date_start  = $input['date_start'];
        $holiday->date_end    = $input['date_end'];
        $holiday->description = $input['description'];
        $holiday->type        = $input['type'];
        $holiday->status      = 'pending';

        $holiday->save();

        return view('holidays.index');
    }

}
