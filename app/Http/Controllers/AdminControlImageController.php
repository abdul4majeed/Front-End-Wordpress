<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoImage;
use Illuminate\Support\Facades\File;

class AdminControlImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Logo.index',[
            'logos_image'=>LogoImage::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pro_name = "";
        if($f = $request->file('log_image'))
            {
                $pro_name = (time() . '_' .$f->getClientOriginalName());
                $f->move('logo/',$pro_name);
            }

        LogoImage::create([
            'image_logo_path'=> $pro_name,
            'image_title_name'=> $request->get('logo_title'),
        ]);

        return redirect()->route('image.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro_name = LogoImage::find($id)->image_logo_path;

        if($f = $request->file('log_image'))
            {
                if(LogoImage::find($id)->image_logo_path != "")
                {
                    $old_image = 'logo/'.LogoImage::find($id)->image_logo_pa;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                $f->move('logo/',$pro_name);
            }

        LogoImage::first()->update([
            'image_logo_path'=> $pro_name,
            'image_title_name'=> $request->get('logo_title'),
        ]);

        return redirect()->route('image.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LogoImage::find($id)->delete();
        return redirect()->route('image.index');

    }
}
