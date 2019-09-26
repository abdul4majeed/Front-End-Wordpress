<?php

namespace App\Http\Controllers;

use App\TestimonialHeaderSection;
use Illuminate\Http\Request;

class TestimonialHeaderSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.TestimonialHeadSection.index',[
            'testimonials_header' => TestimonialHeaderSection::all(),
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
     * @param  \App\TestimonialHeaderSection  $testimonialHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialHeaderSection $testimonialHeaderSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestimonialHeaderSection  $testimonialHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialHeaderSection $testimonialHeaderSection)
    {
        return view('Admin.TestimonialHeadSection.edit',[
            'testimonial_header' => $testimonialHeaderSection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestimonialHeaderSection  $testimonialHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialHeaderSection $testimonialHeaderSection)
    {
        $testimonialHeaderSection->update($request->except(['_token','_method']));
        return view('Admin.TestimonialHeadSection.index',[
            'testimonials_header' => TestimonialHeaderSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestimonialHeaderSection  $testimonialHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialHeaderSection $testimonialHeaderSection)
    {
        //
    }
}
