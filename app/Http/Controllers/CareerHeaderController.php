<?php

namespace App\Http\Controllers;

use App\CareerHeader;
use Illuminate\Http\Request;

class CareerHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.CareerHeaderSection.index',[
            'careers_header' => CareerHeader::all(),
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
     * @param  \App\CareerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function show(CareerHeader $careerHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CareerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerHeader $careerHeader)
    {
        return view('Admin.CareerHeaderSection.edit',[
            'career_header' => $careerHeader,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CareerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerHeader $careerHeader)
    {
        $careerHeader->update($request->except(['_token','_method']));
        return view('Admin.CareerHeaderSection.index',[
            'careers_header' => CareerHeader::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CareerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerHeader $careerHeader)
    {
        //
    }
}
