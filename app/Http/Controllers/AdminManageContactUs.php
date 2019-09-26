<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use App\Events\ContactUsPosted;
use Illuminate\Support\Facades\Validator;

class AdminManageContactUs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    $rules=array(
        'name'=>'required',
        'email' => 'required|email',
        'message' => 'required',

    );

    $message= array(
        'name.required'=>"Name is Required",
        'email.required'=>"Email is Required",
        'email.required'=>"Email is not in correct formate abc@abc.com",
        'message.required'=>"Message is Required",
        );

    $validate = Validator::make($request->all(),$rules,$message);

    if($validate->fails())
    {
        return response()->json($validate->errors(), 400); // 400 being the HTTP code for an invalid request
    }
    else
    {
        $contactus = ContactUs::create($request->except('_token'));

        event(new ContactUsPosted($contactus));

        return response()->json(['success'=>"Your Message Has Been Received! Thanks for taking the time to fill out our form. You can expect a reply within 24 hours"]);
    }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contact_us)
    {
        return $contact_us;
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
        //
    }
}
