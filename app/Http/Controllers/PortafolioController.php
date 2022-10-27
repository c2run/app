<?php
namespace App\Http\Controllers;

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

    public function store(){

        $campos = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'descripcion' => 'required',
    ]);
       //se utiliza el modelo project y se llama el método create.
       Project::create($campos);
       return redirect()->route('portafolio');
    }
}
