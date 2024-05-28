<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:services'], ['only' => ['index']]);
        $this->middleware(['permission:create-service'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:edit-service'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:delete-service'], ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);
        if($services) {
            return view('dashboard.services.index', compact('services'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = new Service();
        return view('dashboard.services.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);
        // dd($request->all());

        $data = $request->except('image');
        $imagePath = $this->uploadImage($request);
        if ($imagePath) {
            $data['image'] = $imagePath;
        }
        Service::create($data);
        return Redirect::route('services.index')->with('success', 'Service Created success');
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
        $service = Service::findOrFail($id);
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);
        $rules = [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);
        $data = $request->except('image');

        $imagePath = $this->uploadImage($request);
        if ($imagePath) {
            $data['image'] = $imagePath;
        }
        $service->update($data);
        return Redirect::route('services.index')->with('success', 'Services Updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        Storage::delete($service->image); //unlink
        $service->delete();
        return Redirect::route('services.index')->with('success', 'Service Deleted success');
    }
    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return null;
        }
        $filePath = Storage::putFile('services', $request->image);
        return $filePath;
    }
}
