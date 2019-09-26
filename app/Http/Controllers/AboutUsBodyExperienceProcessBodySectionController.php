<?php

namespace App\Http\Controllers;

use App\AboutUsBodyExperienceProcessBodySection;
use Illuminate\Http\Request;

class AboutUsBodyExperienceProcessBodySectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.AboutBodyExperiecneProcessBodySection.index',[
            'abouts_us' => AboutUsBodyExperienceProcessBodySection::all(),
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
     * @param  \App\AboutUsBodyExperienceProcessBodySection  $aboutUsExperienceProcessBody
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsBodyExperienceProcessBodySection $aboutUsExperienceProcessBody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUsBodyExperienceProcessBodySection  $aboutUsExperienceProcessBody
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsBodyExperienceProcessBodySection $aboutUsExperienceProcessBody)
    {
        return view('Admin.AboutBodyExperiecneProcessBodySection.edit',[
            'about_us' => $aboutUsExperienceProcessBody,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUsBodyExperienceProcessBodySection  $aboutUsExperienceProcessBody
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsBodyExperienceProcessBodySection $aboutUsExperienceProcessBody)
    {
        $aboutUsExperienceProcessBody->update($request->except(['_token','_method']));
        return view('Admin.AboutBodyExperiecneProcessBodySection.index',[
            'abouts_us' => AboutUsBodyExperienceProcessBodySection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUsBodyExperienceProcessBodySection  $aboutUsExperienceProcessBody
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsBodyExperienceProcessBodySection $aboutUsExperienceProcessBody)
    {
        //
    }
}
