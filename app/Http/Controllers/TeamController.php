<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("teams.index", [
            "teams" => Team::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teams.create");
    }

    /**
     * Store a newly created resource in storage.
     * 
     */

    public function store(Request $request)
    {
        $team = new Team($request->all());
        $team->save();
        return redirect(route('teams.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('teams.edit', [
            'team' => $team
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team->fill($request->all());
        $team->save();
        return redirect(route('teams.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $flight = Team::find($id);
        $flight->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }

}
