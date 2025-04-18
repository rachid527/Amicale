<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::latest()->paginate(10);
        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:200',
            'date' => 'required|date',
            'prix' => 'required|string',
            'statut' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,avi|max:20000',
        ]);

        // Gestion des fichiers
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('storage/activites', 'public');
        }

        if ($request->hasFile('video')) {
            $data['video_path'] = $request->file('video')->store('storage/activites', 'public');
        }

        Activity::create($data);

        return redirect()->route('admin.activities.index')->with('info', 'Activité créée avec succès.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return view('admin.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        return view('admin.activities.edit', compact('activity'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:200',
            'date' => 'required|date',
            'prix' => 'required|string',
            'statut' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,avi|max:20000',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('storage/activites', 'public');
        }

        if ($request->hasFile('video')) {
            $data['video_path'] = $request->file('video')->store('storage/activites', 'public');
        }

        $activity->update($data);

        return redirect()->route('admin.activities.index')->with('info', 'Activité modifiée avec succès.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('admin.activities.index')->with('info', 'Activité supprimée avec succès.');
    }
}
