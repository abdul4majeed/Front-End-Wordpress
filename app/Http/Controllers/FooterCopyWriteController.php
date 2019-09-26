<?php

namespace App\Http\Controllers;

use App\FooterCopyWrite;
use Illuminate\Http\Request;

class FooterCopyWriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.FooterCopyWrite.index',[
            'footer_contents' => FooterCopyWrite::all(),
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
     * @param  \App\FooterCopyWrite  $footerCopyWrite
     * @return \Illuminate\Http\Response
     */
    public function show(FooterCopyWrite $footerCopyWrite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FooterCopyWrite  $footerCopyWrite
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterCopyWrite $footerCopyWrite)
    {
        return view('Admin.FooterCopyWrite.edit',[
            'footer_content' => $footerCopyWrite,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FooterCopyWrite  $footerCopyWrite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterCopyWrite $footerCopyWrite)
    {
        $footerCopyWrite->update($request->except(['_token','_method']));
        return view('Admin.FooterCopyWrite.index',[
            'footer_contents' => FooterCopyWrite::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FooterCopyWrite  $footerCopyWrite
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterCopyWrite $footerCopyWrite)
    {
        //
    }
}
