<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubLink;
use App\Link;
use Illuminate\Support\Facades\Auth;

class AdminManageSubLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.SubLink.index',[
            'sub_links'=>SubLink::with(['user','link'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.SubLink.add',[
            'links'=>Link::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubLink::create([
            'sub_link'=>$request->sub_link,
            'link_id'=>$request->link,
            'user_id'=>Auth::id(),
        ]);

        return redirect()->route('sub_link.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubLink $sub_link)
    {
        return view('Admin.SubLink.edit',[
            'sub_link'=>$sub_link,
            'links'=> Link::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubLink $sub_link)
    {
        $sub_link->update([
            'sub_link'=>$request->sub_link,
            'link_id'=>$request->link,
        ]);

        return redirect()->route('sub_link.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubLink $sub_link)
    {
        $sub_link->delete();

        return redirect()->route('sub_link.index');
    }
}
