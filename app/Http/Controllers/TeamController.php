<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use File;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.TeamBodySection.index',[
            'team_memebers' => Team::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.TeamBodySection.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro_name="";   
        if($f = $request->file('image_path'))
            {

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('team_members/image/',$pro_name);
            }

        Team::create($request->except(['_token','_method','image_path'])+['image_path'=>$pro_name]);
        return view('Admin.TeamBodySection.index',[
            'team_memebers' => Team::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('Admin.TeamBodySection.edit',[
            'team_memeber' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $pro_name="";   
        if($f = $request->file('image_path'))
            {
                if($team->image_path != "")
                {
                    $old_image = $team->image_path;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('team_members/image/',$pro_name);
            }

        $team->update($request->except(['_token','_method','image_path'])+['image_path'=>$pro_name]);
        return view('Admin.TeamBodySection.index',[
            'team_memebers' => Team::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index',[
            'team_memebers' => Team::all(),
        ]);
    }
}
