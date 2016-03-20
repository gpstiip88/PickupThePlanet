<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EventType;
use App\Http\Requests\EventTypes\CreateEventTypeRequest;
use App\Http\Requests\EventTypes\UpdateEventTypeRequest;

class EventTypesController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $eventtypes = EventType::paginate(20);

        $index = $eventtypes->firstItem();

        return view('eventtypes.index', compact('eventtypes', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateEventTypeRequest $request)
    {
        $eventtype = EventType::create($request->all());

        return redirect()->route('eventtypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $eventtype = EventType::findOrFail($id);

        return view('eventtypes.show', compact('eventtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $eventtype = EventType::findOrFail($id);
    
        return view('eventtypes.edit', compact('eventtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateEventTypeRequest $request, $id)
    {       
        $eventtype = EventType::findOrFail($id);

        $eventtype->update($request->all());

        return redirect()->route('eventtypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $eventtype = EventType::findOrFail($id);
        
        $eventtype->delete();
    
        return redirect()->route('eventtypes.index');
    }

}
