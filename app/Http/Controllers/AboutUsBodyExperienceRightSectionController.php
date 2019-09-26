<?php

namespace App\Http\Controllers;

use App\AboutUsBodyExperienceRightSection;
use Illuminate\Http\Request;

class AboutUsBodyExperienceRightSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.AboutUsRightExperience.index',[
            'abouts_us'=>AboutUsBodyExperienceRightSection::all(),
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
     * @param  \App\AboutUsBodyExperienceRightSection  $aboutUsExperienceRight
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsBodyExperienceRightSection $aboutUsExperienceRight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUsBodyExperienceRightSection  $aboutUsExperienceRight
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsBodyExperienceRightSection $aboutUsExperienceRight)
    {
        return view('Admin.AboutUsRightExperience.edit',[
            'about_us'=>$aboutUsExperienceRight,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUsBodyExperienceRightSection  $aboutUsExperienceRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsBodyExperienceRightSection $aboutUsExperienceRight)
    {
        $aboutUsExperienceRight->update($request->except(['_token','_method']));
        
        return view('Admin.AboutUsRightExperience.index',[
            'abouts_us'=>AboutUsBodyExperienceRightSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUsBodyExperienceRightSection  $aboutUsExperienceRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsBodyExperienceRightSection $aboutUsExperienceRight)
    {
        //
    }
}
