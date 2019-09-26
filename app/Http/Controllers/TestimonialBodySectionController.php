<?php

namespace App\Http\Controllers;

use App\TestimonialBodySection;
use Illuminate\Http\Request;
use File;
class TestimonialBodySectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.TestimonialBodySection.index',[
            'testimonials_body' => TestimonialBodySection::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.TestimonialBodySection.add');
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
        if($f = $request->file('pic_url'))
            {
               
                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('testimonial/image/',$pro_name);
            }

        TestimonialBodySection::create($request->except(['_token','_method','pic_url'])+['pic_url'=>$pro_name]+['rating'=>0]+['link_id'=>5]);
        return view('Admin.TestimonialBodySection.index',[
            'testimonials_body' => TestimonialBodySection::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestimonialBodySection  $testimonialBodySection
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialBodySection $testimonialBodySection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestimonialBodySection  $testimonialBodySection
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialBodySection $testimonialBodySection)
    {
        return view('Admin.TestimonialBodySection.edit',[
            'testimonial_body' => $testimonialBodySection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestimonialBodySection  $testimonialBodySection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialBodySection $testimonialBodySection)
    {
        $pro_name="";   
        if($f = $request->file('pic_url'))
            {
                if($testimonialBodySection->pic_url != "")
                {
                    $old_image = $testimonialBodySection->pic_url;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('testimonial/image/',$pro_name);
            }

        $testimonialBodySection->update($request->except(['_token','_method','pic_url'])+['pic_url'=>$pro_name]);
        return view('Admin.TestimonialBodySection.index',[
            'testimonials_body' => TestimonialBodySection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestimonialBodySection  $testimonialBodySection
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialBodySection $testimonialBodySection)
    {
        $testimonialBodySection->delete();
        return redirect()->route('testimonialBodySection.index',[
            'testimonials_body' => TestimonialBodySection::all(),
        ]);
    }
}
