<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use App\Event;
class CaseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $missions = Mission::all()->sortByDesc('created_at');
        $events = Event::all()->sortByDesc('date');
        return view('cases.index',compact('missions','events',));
    }
    public function finish(){
        $missions = Mission::all()->sortByDesc('created_at');
        $events = Event::all()->sortByDesc('date');
        return view('cases.finish',compact('missions','events',));
    }
}
