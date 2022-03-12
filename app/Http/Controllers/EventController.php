<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        return json_encode( compact('events')['events'] );
    }


    public function create()
    {
        return view('calendar.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);

        $events = Event::create([
            'title' => $request->title,
            'start_at' => date($request->start_at),
            'end_at' => date($request->end_at),
        ]);

        return redirect('/calendar');

    }


    public function show($id)
    {
        $event = Event::find($id);
        return view('calendar.show',compact('events'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}