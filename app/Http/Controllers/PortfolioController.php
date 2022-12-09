<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('index',
            ['projects'=>Project::getProjects()]);
    }
}
