@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="title has-text-centered">✏️ Modifier une activité</h1>

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire de modification --}}
    <form action="{{ route('admin.activities.update', $activity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Titre --}}
        <div class="field">
            <label class="label">Titre</label>
            <div class="control">
                <input class="input" type="text" name="titre" value="{{ old('titre', $activity->titre) }}" required>
            </div>
        </div>

        {{-- Date --}}
        <div class="field">
            <label class="label">Date</label>
            <div class="control">
                <input class="input" type="datetime-local" name="date"
                       value="{{ old('date', \Carbon\Carbon::parse($activity->date)->format('Y-m-d\TH:i')) }}" required>
            </div>
        </div>

        {{-- Prix --}}
        <div class="field">
            <label class="label">Prix (en FCFA)</label>
            <div class="control">
                <input class="input" type="text" name="prix" value="{{ old('prix', $activity->prix) }}" required>
            </div>
        </div>

        {{-- Statut --}}
        <div class="field">
            <label class="label">Statut</label>
            <div class="control">
                <div class="select">
                    <select name="statut" required>
                        <option value="Terminée" {{ old('statut', $activity->statut) == 'Terminée' ? 'selected' : '' }}>Terminée</option>
                        <option value="En cours" {{ old('statut', $activity->statut) == 'En cours' ? 'selected' : '' }}>En cours</option>
                        <option value="À venir" {{ old('statut', $activity->statut) == 'À venir' ? 'selected' : '' }}>À venir</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" rows="5" required>{{ old('description', $activity->description) }}</textarea>
            </div>
        </div>

        {{-- Image actuelle --}}
        @if($activity->image_path)
            <div class="field">
                <label class="label">Image actuelle</label>
                <figure class="image is-4by3">
                    <img src="{{ asset($activity->image_path) }}" alt="Image actuelle">
                </figure>
            </div>
        @endif

        {{-- Nouvelle image --}}
        <div class="field">
            <label class="label">Nouvelle image (optionnelle)</label>
            <div class="control">
                <input class="input" type="file" name="image" accept="image/*">
            </div>
        </div>

        {{-- Vidéo actuelle --}}
        @if($activity->video_path)
            <div class="field">
                <label class="label">Vidéo actuelle</label>
                <video width="100%" height="auto" controls>
                    <source src="{{ asset($activity->video_path) }}" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture des vidéos.
                </video>
            </div>
        @endif

        {{-- Nouvelle vidéo --}}
        <div class="field">
            <label class="label">Nouvelle vidéo (optionnelle)</label>
            <div class="control">
                <input class="input" type="file" name="video" accept="video/mp4">
            </div>
        </div>

        {{-- Boutons --}}
        <div class="field mt-5">
            <div class="control">
                <button type="submit" class="button is-warning">💾 Enregistrer</button>
                <a href="{{ route('admin.activities.index') }}" class="button is-light">← Retour</a>
            </div>
        </div>
    </form>

</div>
@endsection
