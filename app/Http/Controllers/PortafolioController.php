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

    public function show($id){
        $project = Project::findOrFail($id);

        return view('projects/show',[
            'project' => $project
        ]);
    }
}
