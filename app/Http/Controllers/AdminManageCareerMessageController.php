<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CareerMessage;
use App\Events\CareerMessagePosted;
use Illuminate\Support\Facades\Validator;

class AdminManageCareerMessageController extends Controller
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
            'cv' => 'required|max:10000|mimes:pdf',
        );
    
        $message= array(
            'name.required'=>"Name is Required",
            'email.required'=>"Email is Required",
            'email.required'=>"Email is not in correct formate abc@abc.com",
            'cv.required'=>"CV is Required",
            'cv.mimies'=>"CV must be of pdf type",
            );
    
        $validate = Validator::make($request->all(),$rules,$message);
    
        if($validate->fails())
        {
            return response()->json($validate->errors(), 400); // 400 being the HTTP code for an invalid request
        }
        else
        {

            if($f = $request->file('cv'))
            {
                $pro_name = (time() . '_' .$f->getClientOriginalName());
                $f->move('Images/cv/files',$pro_name);
            }

            $career = new CareerMessage();
            $career->name = $request->name;
            $career->email = $request->email;
            $career->company_name = $request->portfolio;
            $career->cv_file_path = $pro_name;
            $career->save();
            event(new CareerMessagePosted($career));
            return response()->json(['success'=>"Your Message Has Been Received! Thanks for taking the time to fill out our form. You can expect a reply within 24 hours"]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CareerMessage $career)
    {
        return $career;
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
