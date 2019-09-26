<?php

namespace App\Http\Controllers;

use App\ProjectHeaderProjectSection;
use Illuminate\Http\Request;
use File;
class ProjectHeaderProjectSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.ProjectBodySection.index',[
            'projects' => ProjectHeaderProjectSection::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projectbodysection.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro_name="";   
        if($f = $request->file('url'))
            {

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('project/image/',$pro_name);
            }

        ProjectHeaderProjectSection::create($request->except(['_token','_method','url'])+['url'=>$pro_name]+['link_id'=>4]);
        return view('Admin.ProjectBodySection.index',[
            'projects' => ProjectHeaderProjectSection::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectHeaderProjectSection  $projectHeaderProjectSection
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectHeaderProjectSection $projectHeaderProjectSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectHeaderProjectSection  $projectHeaderProjectSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectHeaderProjectSection $projectHeaderProjectSection)
    {
        return view('Admin.ProjectBodySection.edit',[
            'project' => $projectHeaderProjectSection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectHeaderProjectSection  $projectHeaderProjectSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectHeaderProjectSection $projectHeaderProjectSection)
    {
        $pro_name="";   
        if($f = $request->file('url'))
            {
                if($projectHeaderProjectSection->url != "")
                {
                    $old_image = $projectHeaderProjectSection->url;
                    File::delete($old_image);
                }

                $pro_name = (time() . '_' .$f->getClientOriginalName());
                
                $f->move('project/image/',$pro_name);
            }

        $projectHeaderProjectSection->update($request->except(['_token','_method','url'])+['url'=>$pro_name]);
        return view('Admin.ProjectBodySection.index',[
            'projects' => ProjectHeaderProjectSection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectHeaderProjectSection  $projectHeaderProjectSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectHeaderProjectSection $projectHeaderProjectSection)
    {
        $projectHeaderProjectSection->delete();
        return redirect()->route('projectHeaderProjectSection.index',[
            'projects' => ProjectHeaderProjectSection::all(),
        ]);
    }
}
