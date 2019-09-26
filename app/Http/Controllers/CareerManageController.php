<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CareerMessage;
use Illuminate\Support\Facades\File;

class CareerManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.MessagesandCareer.view_career');
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $care_mess = CareerMessage::find($id);
        $care_mess->is_seen = 1;
        $care_mess->save();

        return redirect()->route('career_data.index');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $care_mess = CareerMessage::find($id);
        $care_mess_file = $care_mess->cv_file_path;

        $old_image = 'Images/cv/files/'.$care_mess_file;
        File::delete($old_image);
       $care_mess->delete();
        return redirect()->route('career_data.index');

    }
}
