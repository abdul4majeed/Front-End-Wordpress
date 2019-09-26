<?php

namespace App\Http\Controllers;

use App\HomeSection;
use Illuminate\Http\Request;
use App\Link;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.HeadSection.index',[
            'home_contents'=>HomeSection::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HeadSection.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link_home = Link::where('link','Home')->get();
        if($link_home->isNotEmpty())
        {
            HomeSection::create($request->except('_token')+['link_id'=>$link_home[0]->id]);
            return redirect()->route('home_section.index');
        }
        else
        {
            return "Home id not found in Links Tab in HomeSectionController Line # 46.Please Include The Home Tab From the Link Section.";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSection $homeSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSection $homeSection)
    {
        return view('Admin.HeadSection.edit',
        [
            'home_section'=>$homeSection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSection $homeSection)
    {
        $homeSection->update($request->except(['_token','_method']));
        return view('Admin.HeadSection.index',[
            'home_contents'=>HomeSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSection $homeSection)
    {
        $homeSection->delete();
        return view('Admin.HeadSection.index',[
            'home_contents'=>HomeSection::all(),
        ]);
    }
}
