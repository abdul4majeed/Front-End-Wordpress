<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinkContent;

class AdminManageLinkContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.LinkContent.index',[
            'link_contents'=>\App\LinkContent::with('link')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.LinkContent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        LinkContent::create(
            [
            'content'=> $request->content,
            'link_id'=> $request->link,
            ]
        );
        
        return redirect()->route('link_content.index',[
            'link_contents'=>\App\LinkContent::with('link')->get(),
        ]);
        
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
    public function edit(LinkContent $link_content)
    {
        return view('Admin.LinkContent.edit',[
            'link_content'=>$link_content,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LinkContent $link_content)
    {
        $link_content->update($request->except(['_token','_method']));

        return redirect()->route('link_content.index',[
            'link_contents'=>\App\LinkContent::with('link')->get(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LinkContent $link_content)
    {
        $link_content->delete();
      
        return redirect()->route('link_content.index',[
            'link_contents'=>\App\LinkContent::with('link')->get(),
        ]);

    }
}
