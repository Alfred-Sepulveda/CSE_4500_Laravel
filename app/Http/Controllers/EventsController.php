<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{

    public function index()
    {
        $events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        return view('events', compact('events'));
    }


    public function create()
    {
        return view('events.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);
        $events = Events::create([
            'title' => $request->title,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
        ]);
        return $this->index();

    }


    public function show($id)
    {
        $events= Events::find($id);
        return view('Events.show',compact('events'));
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