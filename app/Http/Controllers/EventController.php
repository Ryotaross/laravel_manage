<?php

namespace App\Http\Controllers;

use App\Mission;
use App\Event;
use App\Http\Requests\EventRequest;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->authorizeResource(Event::class, 'event');
    }
    //
    public function create(Mission $mission)
    {
        return view('events.create',compact('mission'));
    }
    public function index(Mission $mission)
    {
        $events = Event::where('mission_id','=', $mission->id )->get()->sortByDesc('date');
        return view('missions.show',compact('events','mission'));
    }
    public function finish(Mission $mission)
    {
        $events = Event::where('mission_id','=', $mission->id )->get()->sortByDesc('date');
        return view('missions.finish',compact('events','mission'));
    }
    public function store(EventRequest $request,Event $event,Mission $mission)
    {
        $event->fill($request->all());
        $event->mission_id = $mission->id;
        $event->great = 0;
        $event->save();
        return redirect()->route('event.index',compact('mission'));
    }
    public function destroy(Mission $mission,Event $event)
    {
        $event->delete();
        return redirect()->route('event.index',compact('mission'));
    }
    public function edit(Mission $mission,Event $event)
    {
        return view('events.edit',compact('mission','event'));
    }
    public function update(EventRequest $request,Mission $mission,Event $event)
    {
        $event->fill($request->all())->save();
        return redirect()->route('event.index',compact('mission'));
    }
    public function show(Mission $mission,Event $event)
    {
        return view('events.show',compact('mission','event'));
    }
    public function comp(Event $event,Mission $mission,Request $request)
    {   
        $event = Event::where('id' ,$request->id)
            ->update(['great' => 1]);
        $events = Event::where('mission_id','=', $mission->id )->get()->sortByDesc('date');
        return view('missions.show',compact('events','mission'));
   
    }
    public function recomp(Event $event,Mission $mission,Request $request)
    {   
        $event = Event::where('id' ,$request->id)
            ->update(['great' => 0]);
        $events = Event::where('mission_id','=', $mission->id )->get()->sortByDesc('date');
        return view('missions.show',compact('events','mission'));
    }
    public function setEvents(Request $request){

        $start = $this->formatDate($request->all()['start']);
        $end = $this->formatDate($request->all()['end']);
        //表示した月のカレンダーの始まりの日を終わりの日をそれぞれ取得。

        $events = Event::select('id', 'content', 'date')->whereBetween('date', [$start, $end])->get();
        //$events = Event::leftJoin('missions','missions.id','=','events.mission_id')->select('missions.id', 'missions.name', 'events.date')->whereBetween('events.date', [$start, $end])->get();
        //カレンダーの期間内のイベントを取得

        $newArr = [];
        foreach($events as $item){
            $newItem["id"] = $item["event_id"];
            $newItem["title"] = $item["content"];
            $newItem["start"] = $item["date"];
            $newArr[] = $newItem;
        }
        //新たな配列を用意し、 EventsObjectが対応している配列にキーの名前を変更する

        echo json_encode($newArr);
        //json形式にして出力
    }

    public function formatDate($date){
        return str_replace('T00:00:00+09:00', '', $date);
    }
    public function setCalendar(){
        return view('calendar');
    }
    public function editEventDate(Request $request,Event $event,Mission $mission){
        $data = $request->all();
        $event = Event::find($data['id']);
        

        return route("event.show",compact('event','mission')) ;
    }
    /*
    public function Showcomp(Event $event,Mission $mission,Request $request)
    {   
        $event = Event::where('id' ,$request->id)
            ->update(['great' => 1]);
        return view('events.show',compact('mission','event'));
        //return redirect()->route('event.show',compact('mission','show'));
    }
    public function Showrecomp(Event $event,Mission $mission,Request $request)
    {   
        $event = Event::where('id' ,$request->id)
            ->update(['great' => 0]);
        return view('events.show',compact('mission','event'));
        //return redirect()->route('event.show',compact('mission','show'));
    }*/
}
