<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Activities = Activity::all();
        return view('index', compact('Activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 🔐 1. Valider les champs
        $validated = $request->validate([
            'titre' => 'required|string|max:200',
            'date' => 'required|date',
            'prix' => 'required',
            'statut' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'required|mimetypes:video/mp4|max:20000'
        ]);

        // 📁 2. Gérer l’upload de l’image
        $imagePath = $request->file('image')->store('activites', 'public');

        // 🎥 3. Gérer l’upload de la vidéo
        $videoPath = $request->file('video')->store('activites', 'public');

        // ✅ 4. Créer l’activité avec les bons chemins
        Activity::create([
            'titre' => $validated['titre'],
            'date' => $validated['date'],
            'prix' => $validated['prix'],
            'statut' => $validated['statut'],
            'description' => $validated['description'],
            'image_path' => 'storage/' . $imagePath,
            'video_path' => 'storage/' . $videoPath,
        ]);

        // ✅ 5. Rediriger avec message de succès
        return redirect()->route('activities.index')->with('info', 'L’activité a bien été créée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $Activity)
    {
        return view('show', compact('Activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $Activity)
    {
        return view('edit', compact('Activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $Activity)
    {
        // 1. Valider les données
        $validated = $request->validate([
            'titre' => 'required|string|max:200',
            'date' => 'required|date',
            'prix' => 'required',
            'statut' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimetypes:video/mp4|max:20000',
        ]);

        // 2. Gérer l'image si une nouvelle est envoyée
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('activites', 'public');
            $validated['image_path'] = 'storage/' . $imagePath;

            // Supprimer l'ancienne image (optionnel)
            if ($Activity->image_path && Storage::disk('public')->exists(str_replace('storage/', '', $Activity->image_path))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $Activity->image_path));
            }
        }

        // 3. Gérer la vidéo si une nouvelle est envoyée
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('activites', 'public');
            $validated['video_path'] = 'storage/' . $videoPath;

            // Supprimer l'ancienne vidéo (optionnel)
            if ($Activity->video_path && Storage::disk('public')->exists(str_replace('storage/', '', $Activity->video_path))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $Activity->video_path));
            }
        }

        // 4. Mise à jour de l’activité
        $Activity->update($validated);

        // 5. Redirection avec message de succès
        return redirect()->route('activities.index')->with('info', 'L’activité a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $Activity)
    {
        $Activity->delete();

        return back()->with('info', 'Activite a bien été supprimé dans la base de données.');
    }
}
