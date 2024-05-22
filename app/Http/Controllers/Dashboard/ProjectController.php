<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('dashboard.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('dashboard.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);
        // dd($request->all());

        $data = $request->except('image');
        // if($request->hasFile('image')) {
        //     $filePath = Storage::putFile('projects', $request->image);
        //     $data['image'] = $filePath;
        // }
        $data['image'] = $this->uploadImage($request);

        Project::create($data);
        return Redirect::route('project.index')->with('success', 'Project Created success');
        // dd($data);
        // Project::create([
        //     'name' => $request->input('name'),
        //     'description' => $request->input('description'),
        //     'image' => $filePath, // Save the image path
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|string',
            'client' => 'nullable|string',
            'work_year' => 'nullable|string',
            'started' => 'nullable|string',
            'finished' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);


        // if ($request->has('image')) {
        //     Storage::delete($project->image);
        //     $filePath = Storage::putFile('projects', $request->image);
        //     $project->image = $filePath;
        // }

        $data = $request->except('image');
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $filePath = Storage::putFile('projects', $request->image);
            $data['image'] = $filePath;
        }
        $project->update($data);
        return Redirect::route('project.index')->with('success', 'Project Updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        Storage::delete($project->image); //unlink
        $project->delete();
        return Redirect::route('project.index')->with('success', 'Project Deleted success');
    }

    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return;
        }
        $filePath = Storage::putFile('projects', $request->image);
        return $filePath;
    }
}
