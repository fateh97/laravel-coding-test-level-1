<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::simplePaginate(5);

        return view('dashboard', compact('events', $events));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $event = Event::create([
            'event' => $request->event,
            'slug' => Str::slug($request->event),
            'startDate' => $request->startdate,
            'endDate' => $request->enddate
        ]);

        return redirect()->back()->with('success', 'Product successfully stored.', $event);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('show', compact('event', $event));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('edit', compact('event', $event));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $event->update([
            'event' => $request->event,
            'slug' => Str::slug($request->event),
            'startDate' => $request->startdate,
            'endDate' => $request->enddate
        ]);

        return redirect()->back()->with('success', 'Product successfully updated.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        return redirect()->back()->with('success', 'Product successfully deleted.');
    }
}
