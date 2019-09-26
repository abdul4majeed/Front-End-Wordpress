<?php

namespace App\Http\Controllers;

use App\AboutUsBodyExperienceProcessSection;
use Illuminate\Http\Request;

class AboutUsBodyExperienceProcessSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.AboutBodyExperiecneProcessSection.index',[
            'abouts_us' => AboutUsBodyExperienceProcessSection::all(),
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
     * @param  \App\AboutUsBodyExperienceProcessSection  $aboutUsBodyExperienceProcessSection
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsBodyExperienceProcessSection $aboutUsExperienceProcess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUsBodyExperienceProcessSection  $aboutUsBodyExperienceProcessSection
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsBodyExperienceProcessSection $aboutUsExperienceProcess)
    {
        return view('Admin.AboutBodyExperiecneProcessSection.edit',[
            'about_us'=>$aboutUsExperienceProcess,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUsBodyExperienceProcessSection  $aboutUsBodyExperienceProcessSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsBodyExperienceProcessSection $aboutUsExperienceProcess)
    {
        $aboutUsExperienceProcess->update($request->except('_token','_method'));
        return view('Admin.AboutBodyExperiecneProcessSection.index',[
            'abouts_us' => AboutUsBodyExperienceProcessSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUsBodyExperienceProcessSection  $aboutUsBodyExperienceProcessSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsBodyExperienceProcessSection $aboutUsExperienceProcess)
    {
        //
    }
}
