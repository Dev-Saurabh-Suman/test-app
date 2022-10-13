<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    public function projectIndex(Project $project)
    {
        $project = Project::get();
        return view('project.index',['projects'=> $project]);
    }

    public function projectCreate()
    {
        return view('project.create');
    }

    public function projectstore(Request $request)
    {
        $project = $request->all();
        Project::create($project);
        return redirect('/project/index');
    }

    public function projectAssignPage()
    {
        $user = User::select('name','id')->get();
        $project = Project::select('project_name','id')->get();
        return view('project.assignproject',['users'=>$user,'projects'=>$project]);
    }

    public function projectAssign(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->project()->attach($request->project_id);
        return redirect('/project/index');
    }
}
