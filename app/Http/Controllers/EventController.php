<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class EventController extends Controller
{

    public function index()
    {
        $calendar = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        return view('calendar', compact('calendar'));
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
        $events = Event::select('title', 'start_at AS updated_at', 'end_at AS created_at')->get();
        $events = Event::create([
            'title' => $request->title,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
        ]);

        return $this->index();

    }


    public function show($id)
    {
        $event= Event::find($id);
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