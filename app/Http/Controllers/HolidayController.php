<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    public function index() {
        $title_page = 'Holidays';

        $holidays = Holiday::all();

        return view('holidays', compact('holidays', 'title_page'));
    }
}
