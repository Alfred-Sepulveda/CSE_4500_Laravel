<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
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
        $events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        $events = Event::create([
            'title' => $request->title,
            'start_at' => $request->created_at,
            'end_at' => $request->updated_at,
        ]);

        return $this->index();

    }


    public function show($id)
    {
        $event= Event::find($id);
        return view('Events.show',compact('event'));
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