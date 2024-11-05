<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }

    public function index(){

        $projects = Project::all();
        return view("admin.index" , compact("projects"));
    }


}
