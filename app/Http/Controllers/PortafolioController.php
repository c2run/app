<?php
namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio = Project::latest()->paginate(2);
        return view('portfolio',compact('portafolio'));
    }

    public function show(Project $project){
        return view('projects/show',[
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects/create');
    }

    public function store(SaveProjectRequest $request){
       Project::create($request->validated());
       return redirect()->route('portafolio');
    }
    public function edit(Project $project){
        return view('projects/edit',compact('project'));
    }
    public function update(Project $project, SaveProjectRequest $request){
        $project->update($request->validated());
        
        return redirect()->route('portafolio/show', $project);
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('portafolio');
    }
}
