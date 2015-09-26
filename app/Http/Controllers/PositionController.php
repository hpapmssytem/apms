<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;

use apms\Http\Requests;
use apms\Http\Controllers\Controller;

//requests
use apms\Http\Requests\PositionRequest;

//models
use apms\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $positions = Position::all();

        return view('positions.index')->with('positions', $positions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PositionRequest $request)
    {
        $position = Position::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status')
        ]);

        return \Redirect::route('positions.index')
           ->with('message', 'Position has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $position = Position::findOrFail($id);

        return view('positions.edit')->with('position', $position);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PositionRequest $request, $id)
    {
        $position = Position::find($id);

        $position->update([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
            'status'      => $request->get('status')
        ]);

        echo $position->status;
        return \Redirect::route('positions.index')
           ->with('message', 'Position has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
