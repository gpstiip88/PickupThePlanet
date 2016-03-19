<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interest;
use App\Http\Requests\Interests\CreateInterestRequest;
use App\Http\Requests\Interests\UpdateInterestRequest;

class InterestsController extends Controller
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
        $interests = Interest::paginate(20);

        $index = $interests->firstItem();

        return view('interests.index', compact('interests', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('interests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateInterestRequest $request)
    {
        $interest = Interest::create($request->all());

        return redirect()->route('interests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $interest = Interest::findOrFail($id);

        return view('interests.show', compact('interest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $interest = Interest::findOrFail($id);
    
        return view('interests.edit', compact('interest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateInterestRequest $request, $id)
    {       
        $interest = Interest::findOrFail($id);

        $interest->update($request->all());

        return redirect()->route('interests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $interest = Interest::findOrFail($id);
        
        $interest->delete();
    
        return redirect()->route('interests.index');
    }

}
