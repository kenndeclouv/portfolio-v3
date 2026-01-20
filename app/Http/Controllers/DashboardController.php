<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function login()
    {
        return view('dashboard.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        if ($request->password === env('DASHBOARD_SECRET')) {
            session(['dashboard_authenticated' => true]);
            return redirect()->route('dashboard.index');
        }

        return back()->withErrors(['password' => 'Invalid secret code']);
    }

    public function logout()
    {
        session()->forget('dashboard_authenticated');
        return redirect()->route('dashboard.login');
    }

    public function index()
    {
        $projects = Project::latest()->get();
        return view('dashboard.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.action');
    }

    public function store(Request $request)
    {
         $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'year' => 'required|integer',
            'link' => 'nullable|url',
            'image' => 'nullable|image',
            'second_image' => 'nullable|image',
            'first_preview' => 'nullable|image',
            'second_preview' => 'nullable|image',
            'third_preview' => 'nullable|image',
            'fourth_preview' => 'nullable|image',
            'fifth_preview' => 'nullable|image',
            'video' => 'nullable|string',
            'description' => 'nullable|string',
            'challenge' => 'nullable|string',
            'as' => 'nullable|string',
            'theme' => 'required|in:dark-content,light-content',
            'show_in_home' => 'boolean',
            'show_in_projects' => 'boolean',
        ]);

        $data['show_in_home'] = $request->has('show_in_home');
        $data['show_in_projects'] = $request->has('show_in_projects');

        foreach (['image', 'second_image', 'first_preview', 'second_preview', 'third_preview', 'fourth_preview', 'fifth_preview'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $data[$fileField] = $request->file($fileField)->store('projects', 'public');
            }
        }

        Project::create($data);

        return redirect()->route('dashboard.index')->with('success', 'Project created successfully');
    }

    public function edit(Project $project)
    {
        return view('dashboard.action', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
         $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'year' => 'required|integer',
            'link' => 'nullable|url',
            'image' => 'nullable|image',
            'second_image' => 'nullable|image',
            'first_preview' => 'nullable|image',
            'second_preview' => 'nullable|image',
            'third_preview' => 'nullable|image',
            'fourth_preview' => 'nullable|image',
            'fifth_preview' => 'nullable|image',
            'video' => 'nullable|string',
            'description' => 'nullable|string',
            'challenge' => 'nullable|string',
            'as' => 'nullable|string',
            'theme' => 'required|in:dark-content,light-content',
            'show_in_home' => 'boolean',
            'show_in_projects' => 'boolean',
        ]);

        $data['show_in_home'] = $request->has('show_in_home');
        $data['show_in_projects'] = $request->has('show_in_projects');

        foreach (['image', 'second_image', 'first_preview', 'second_preview', 'third_preview', 'fourth_preview', 'fifth_preview'] as $fileField) {
            if ($request->hasFile($fileField)) {
                if ($project->$fileField) {
                    Storage::disk('public')->delete($project->$fileField);
                }
                $data[$fileField] = $request->file($fileField)->store('projects', 'public');
            }
        }

        $project->update($data);

        return redirect()->route('dashboard.index')->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        foreach (['image', 'second_image', 'first_preview', 'second_preview', 'third_preview', 'fourth_preview', 'fifth_preview'] as $fileField) {
            if ($project->$fileField) {
                Storage::disk('public')->delete($project->$fileField);
            }
        }

        $project->delete();
        return redirect()->route('dashboard.index')->with('success', 'Project deleted');
    }
}
