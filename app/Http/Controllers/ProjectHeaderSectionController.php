<?php

namespace App\Http\Controllers;

use App\ProjectHeaderSection;
use Illuminate\Http\Request;

class ProjectHeaderSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.ProjectHeadSection.index',[
            'projects_header' => ProjectHeaderSection::all(),
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
     * @param  \App\ProjectHeaderSection  $projectHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectHeaderSection $projectHeaderSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectHeaderSection  $projectHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectHeaderSection $projectHeaderSection)
    {
        return view('Admin.ProjectHeadSection.edit',[
            'project' => $projectHeaderSection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @pa
     * ram  \Illuminate\Http\Request  $request
     * @param  \App\ProjectHeaderSection  $projectHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectHeaderSection $projectHeaderSection)
    {
        $projectHeaderSection->update($request->except(['_token','_method']));
        return view('Admin.ProjectHeadSection.index',[
            'projects_header' => ProjectHeaderSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectHeaderSection  $projectHeaderSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectHeaderSection $projectHeaderSection)
    {
        //
    }
}
