<?php

namespace App\Http\Controllers;

use App\FooterContect;
use Illuminate\Http\Request;

class FooterContectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.FooterContent.index',[
            'footer_contents' => FooterContect::all(),
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
     * @param  \App\FooterContect  $footerContect
     * @return \Illuminate\Http\Response
     */
    public function show(FooterContect $footerContect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FooterContect  $footerContect
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterContect $footerContect)
    {
        return view('Admin.FooterContent.edit',[
            'footer_content' => $footerContect,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FooterContect  $footerContect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterContect $footerContect)
    {
        $footerContect->update($request->except(['_token','_method']));
        return view('Admin.FooterContent.index',[
            'footer_contents' => FooterContect::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FooterContect  $footerContect
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterContect $footerContect)
    {
        //
    }
}
