<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResponseMail;
use App\Models\Contact;
use App\Models\Project;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::where('show_in_home', true)->get();
        return view('index', compact('projects'));
    }

    public function projects()
    {
        $projects = Project::where('show_in_projects', true)->get();
        return view('projects', compact('projects'));
    }

    public function archive()
    {
        $projects = Project::all();
        return view('archive', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function project(Project $project)
    {
        $allProjects = Project::all()->count();
        if ($project->id >= $allProjects) {
            $nextProject = Project::first();
        } else {
            $nextProject = Project::find($project->id + 1);
        }
        $nextProjectImage = $nextProject->image;
        $nextProjectLink = $nextProject->id;
        $nextProjectTitle = $nextProject->title;
        return view('project', compact('project', 'nextProjectImage', 'nextProjectLink', 'nextProjectTitle'));
    }
}
