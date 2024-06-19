<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $projectsList = Project::all();
        return view('admin.dashboard',compact('projectsList'));
    }
}
