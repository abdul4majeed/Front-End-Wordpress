<?php

namespace App\Http\Controllers;

use App\TeamHeader;
use Illuminate\Http\Request;

class TeamHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.TeamHeaderSection.index',[
            'teams_header' => TeamHeader::all(),
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamHeader  $teamHeader
     * @return \Illuminate\Http\Response
     */
    public function show(TeamHeader $teamHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamHeader  $teamHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamHeader $teamHeader)
    {
        return view('Admin.TeamHeaderSection.edit',[
            'team_header' => $teamHeader,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamHeader  $teamHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamHeader $teamHeader)
    {
        $teamHeader->update($request->except('_token','_method'));
        return view('Admin.TeamHeaderSection.index',[
            'teams_header' => TeamHeader::all(),
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamHeader  $teamHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamHeader $teamHeader)
    {
        //
    }
}
