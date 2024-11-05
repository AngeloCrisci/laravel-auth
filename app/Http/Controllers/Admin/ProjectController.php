<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MyProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }

    public function index(){

        return view("admin.projects.index");
    }


}
