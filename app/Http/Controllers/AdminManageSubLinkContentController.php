<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubLinkContent;
use File;
class AdminManageSubLinkContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.SubLinkContent.index',[
            'link_contents'=>\App\SubLinkContent::with(['sub_link','sub_link','sub_link','sub_link','sub_link','sub_link'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.SubLinkContent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->sublink_id !== 0)
        {
            $pro_name="";   
            if($f = $request->file('img_url'))
                {
                    $pro_name = (time() . '_' .$f->getClientOriginalName());
                    
                    $f->move('post/image/',$pro_name);

                }
                SubLinkContent::create($request->except('_token','img_url')+['img_url'=>$pro_name]);
                
                return redirect()->route('sub_link_content.index',[
                    'link_contents'=>\App\SubLinkContent::with('sub_link')->get(),
                ]);
        }
        else
        {
            dd('Cannot Add Content Because Link is Not Selected');
        }
        
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
    public function edit(SubLinkContent $sub_link_content)
    {
        return view('Admin.SubLinkContent.edit',[
            'sub_link_content'=>$sub_link_content,
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubLinkContent $sub_link_content)
    {

        $pro_name="";   
        if($f = $request->file('img_url'))
            {
                if($sub_link_content->img_url != "")
                {
                    $old_image = $sub_link_content->img_url;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('post/image/',$pro_name);

            }

        $sub_link_content->update($request->except(['_token','_method','img_url'])+['img_url'=>$pro_name]);

        return redirect()->route('sub_link_content.index',[
            'link_contents'=>\App\SubLinkContent::with('sub_link')->get(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubLinkContent $sub_link_content)
    {
        $sub_link_content->delete();
      
        return redirect()->route('sub_link_content.index',[
            'link_contents'=>\App\SubLinkContent::with('sub_link')->get(),
        ]);

    }
}
