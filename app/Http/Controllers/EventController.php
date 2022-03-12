<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        //$event = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        $event = Event::all();
        return   view('calendar', compact('calendar'));
        //$todos = Todo::all();
        //return view('todos', compact('todos'));
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
            'start_at' => $request->date('start_at'),
            'end_at' => $request->date('end_at'),
        ]);

        return $this->index();

    }


    public function show($id)
    {
        $event = Event::find($id);
        return view('calendar.show',compact('event'));
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