<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::first();
        return view('dashboard.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $settings = Setting::findOrFail($id);

        // Validate incoming request data
        $rules = [
            'phone' => 'required',
            'email' => 'required',
            'fb_link' => 'nullable',
            'tw_link' => 'nullable',
            'insta_link' => 'nullable',
            'linkdin_link' => 'nullable',
        ];

        $this->validate($request, $rules);

        // dd($request->all());
        // Update settings with validated data
        $settings->update([
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'fb_link' => $request->input('fb_link'),
            'tw_link' => $request->input('tw_link'),
            'insta_link' => $request->input('insta_link'),
            'linkdin_link' => $request->input('linkdin_link'),
        ]);

        return redirect()->route('setting.index')->with('success', 'Setting Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
