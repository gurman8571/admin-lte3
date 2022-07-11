<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Event_list;
class EventController extends Controller
{
public function index()
{
    $events=Event::where('status',1)->get(['id','name','created_at']);
    //dd($events);
    return view('Events.Index',compact('events'));
}
public function events()
{
    $events=Event::where('status',1)->pluck('name','id');
       return $events;
}

public function add()
{
    return view('Events.Create');
}

public function create(request $req)
{
 $validatedData=$req->validate([
            'event'=>'required',
           ]);
        //dd($req->all());
        $event=new Event;
        $event->name=$req->event;
        $event->save();
        return redirect()->route('Event.index');

}

public function delete($id)
{
   $event=Event::find($id);
   $event->delete();
   return back()->with('delete','event Deleted');
}

public function event_list()
{
$list=Event_list::all();
return view('Calender.Calender2',compact('list'));
}

public function Eventlist_add()
{
    $events=$this->events();
    return view('Calender.Create',compact('events'));

}
public function Eventlist_Create(request $req)
{
    //dd($req->all());
    $event_list=new Event_list;
    $event_list->date=$req->date;
    $event_list->event_id=$req->event;
    $event_list->save();
    return redirect()->route('Event.List');


}

}
