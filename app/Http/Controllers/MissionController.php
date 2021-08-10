<?php

namespace App\Http\Controllers;

use App\Mission;
use App\Event;
use App\Complete;
use App\Http\Requests\MissionRequest;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->authorizeResource(Mission::class, 'mission');
    }
    //
    public function create()
    {
        return view('missions.create');
    }

    public function store(MissionRequest $request,Mission $mission)
    {
        $mission->fill($request->all());
        $mission->great = 0;
        $mission->user_id = $request->user()->id;
        $mission->save();
        return redirect()->route('mission.index');
    }
    public function edit(Mission $mission)
    {
        return view('missions.edit',['mission' => $mission]);
    }
    public function update(MissionRequest $request,Mission $mission)
    {
        $mission->fill($request->all())->save();
        return redirect()->route('mission.index');
    }
    public function destroy(Mission $mission)
    {
        $mission->delete();
        return redirect()->route('mission.index');
    }
    public function show(Mission $mission)
    {
        $events = Event::where('mission_id','=', $mission->id );
        return view('missions.show',['events'=>$events]);
    }
    public function comp(Request $request)
    {   
        Mission::where('id',$request->id)
            ->update(['great' => 1]);
        return redirect()->route('mission.index');
    }
    public function recomp(Request $request)
    {   
       Mission::where('id',$request->id)
            ->update(['great' => 0]);
        return  redirect()->route('mission.index');
    }
}
