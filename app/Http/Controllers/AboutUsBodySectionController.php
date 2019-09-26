<?php

namespace App\Http\Controllers;

use App\AboutUsBodySection;
use Illuminate\Http\Request;
use File;

class AboutUsBodySectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.AboutBodySection.index',[
            'abouts_us'=>AboutUsBodySection::all(),
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
     * @param  \App\AboutUsBodySection  $aboutUsBodySection
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsBodySection $aboutUsBodySection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUsBodySection  $aboutUsBodySection
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsBodySection $aboutUsBodySection)
    {
        return view('Admin.AboutBodySection.edit',
        [
            'about_us'=>$aboutUsBodySection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUsBodySection  $aboutUsBodySection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsBodySection $aboutUsBodySection)
    {
        $pro_name="";   
        if($f = $request->file('image_url'))
            {
                if($aboutUsBodySection->image_url != "")
                {
                    $old_image = 'about/body/image/'.$aboutUsBodySection->image_url;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('about/body/image/',$pro_name);
            }

        $aboutUsBodySection->update($request->except(['_token','_method','image_url']) + ['image_url'=>$pro_name]);
        return view('Admin.AboutBodySection.index',[
            'abouts_us'=>AboutUsBodySection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUsBodySection  $aboutUsBodySection
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsBodySection $aboutUsBodySection)
    {
        $aboutUsBodySection->delete();
        return view('Admin.AboutBodySection.index',[
            'abouts_us'=>AboutUsBodySection::all(),
        ]);
    }
}
