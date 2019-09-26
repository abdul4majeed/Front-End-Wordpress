<?php

namespace App\Http\Controllers;

use App\ServicesHeader;
use Illuminate\Http\Request;

class ServicesHeaderController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.ServicesHeadSection.index',[
            'services_header' => ServicesHeader::all(),
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
     * @param  \App\ServicesHeader  $servicesHeader
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesHeader $servicesHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServicesHeader  $servicesHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesHeader $servicesHeader)
    {
        return view('Admin.ServicesHeadSection.edit',[
            'services_header' => $servicesHeader,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServicesHeader  $servicesHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesHeader $servicesHeader)
    {
        $servicesHeader->update($request->except(['_token','_method']));
        return view('Admin.ServicesHeadSection.index',[
            'services_header' => ServicesHeader::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServicesHeader  $servicesHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesHeader $servicesHeader)
    {
        //
    }
}
