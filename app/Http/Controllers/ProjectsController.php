<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProjectRequest;
use App\Project;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class ProjectsController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();

        foreach ($projects as $project) 
        {
            $project->tagsArr= explode(' ',$project->tags);
        }
        
        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $projectTags=explode(' ',$project->tags);
        
        return view('projects.show', compact('project', 'projectTags'));
    }

     public function showTags($tag)
    {
        $projects = DB::table('projects')->where('tags','<>','')->get();

        $projectsWithTag = [];
        //$tuRecenicu = '';

        foreach ($projects as $project) {
            $hasTag= strpos($project->tags,$tag);
            //dd($hasTag);
            //$tuRecenicu=$tuRecenicu.' '. $project->tags;
            //$nizProjekata=explode(' ',$tuRecenicu);
            //$nizProjekataKojiSeNePonavljaju=array_unique($nizProjekata);
            //$nizProjekataKojiSeNePonavljajuBezPraznihPolja=array_filter($nizProjekataKojiSeNePonavljaju);

            if($hasTag !== false) 
            {
                $project->tagsArr= explode(' ',$project->tags);
                array_push($projectsWithTag,$project);
            }            
        }

        
        //dd($nizProjekataKojiSeNePonavljajuBezPraznihPolja);
        //dd('pera' . $projectsWithTag);
        //dd('pera'. $tags);
        return view('projects.tags', compact('projectsWithTag'));
    }

    public function create()
    {    


        if(!Auth::user())
        {
            dd('there was problem saying you are not logged in');
            return;
        }

        return view('projects.create');
    }


    public function store(ProjectRequest $request)
    {

        $project = Project::create($request->all());

       // dd($project);
    
        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                
                //set upload path
                $destinationPath = 'uploads';
                //get filename
                $filename = $request->file('image')->getClientOriginalName();
                //uploading file to given path
                $request->file('image')->move($destinationPath, $filename);
                //dd($filename);
                //set project image
                $project->image = $destinationPath . '/' . $filename;
                //dd($project->image);
                //save
                $project->save();

            }
            else
            {
                //there was problem uploading image
                dd('there was problem uploading image');
            }

            

        }
        else
        {
            //image file not uploaded
            dd('image file not uploaded');
        }

        /*if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            // sending back with message
            Session::flash('success', 'Upload successfully'); 
            return Redirect::to('upload');
        }*/


        return redirect('projects');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();
        
        return redirect('projects');
    }

    public function update(ProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update($request->all());
        //dd($project);
        
        return redirect('projects');
    }

    public function edit($id)
    {     
        if(!Auth::user())
        {
            dd('there was problem saying you are not logged in');
            return;
        }

        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
}
