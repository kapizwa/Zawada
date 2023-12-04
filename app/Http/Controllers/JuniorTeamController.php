<?php

namespace App\Http\Controllers;

use App\Models\JuniorTeam;
use Illuminate\Http\Request;

class JuniorTeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view("junior.juniorteam", [
            "juniorteams" => JuniorTeam::all()
        ]);
    }
}
