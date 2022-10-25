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
        $portafolio = Project::get();
        return view('portfolio',compact('portafolio'));
    }
}
