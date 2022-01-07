<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events=Event::all();
        return view('event/index',compact('events'));
    }

    public function addEvent()
    {
        return view('event/create');
    }
    public function addnewEvent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'datetime'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        $event = new Event;
        $event->user_id = Auth::id();
        $event->title = $request->name;
        $event->description = $request->description;
        $event->location = $request->address;
        // $event->event_date_time = carbon::parse($request->datetime)->format('Y-m-d H:i');
        $event->event_date_time = $request->datetime;
        $name = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('images',$name);
        $event->image=$name;
        $event->save();
        return redirect('/event');
    }
    public function show($id){
        $event=Event::find($id);
        return view('event/show',compact('event'));
    }
    public function destroy($id)
    {
        $event = Event::find($id);
        $path='images/'.$event->image;
        if (file_exists($path)) {
            unlink($path);
        }
        
        $event->delete();
        return redirect('/event');
    }
    public function edit($id)
    {
        $event = Event::find($id);
   
        return view('event/edit',compact('event'));
    }
}
