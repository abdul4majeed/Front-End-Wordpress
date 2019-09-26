<?php

namespace App\Http\Controllers;

use App\AboutUsBodyExperienceSection;
use Illuminate\Http\Request;
use File;
class AboutUsBodyExperienceSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.AboutUsLeftExperience.index',[
            'abouts_us'=>AboutUsBodyExperienceSection::all(),
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
     * @param  \App\AboutUsBodyExperienceSection  $aboutUsBodyExperienceSection
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsBodyExperienceSection $aboutUsBodyExperienceSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUsBodyExperienceSection  $aboutUsBodyExperienceSection
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsBodyExperienceSection $aboutUsBodyExperienceSection)
    {
        return view('Admin.AboutUsLeftExperience.edit',
        [
            'about_us'=>$aboutUsBodyExperienceSection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUsBodyExperienceSection  $aboutUsBodyExperienceSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsBodyExperienceSection $aboutUsBodyExperienceSection)
    {
        $pro_name="";   
        if($f = $request->file('image_url'))
            {
                if($aboutUsBodyExperienceSection->image_url != "")
                {
                    $old_image = 'about/experience/image/'.$aboutUsBodyExperienceSection->image_url;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('about/experience/image/',$pro_name);
            }

        $aboutUsBodyExperienceSection->update($request->except(['_token','_method','image_url']) + ['image_url'=>$pro_name]);
        
        return view('Admin.AboutUsLeftExperience.index',[
            'abouts_us'=>AboutUsBodyExperienceSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUsBodyExperienceSection  $aboutUsBodyExperienceSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsBodyExperienceSection $aboutUsBodyExperienceSection)
    {
        //
    }
}
