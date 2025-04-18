@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="title has-text-centered">✏️ Modifier une activité</h1>

    {{-- Affichage des erreurs de validation --}}
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
    <form action="{{ route('activities.update', $Activity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Titre --}}
        <div class="field">
            <label class="label">Titre</label>
            <div class="control">
                <input class="input" type="text" name="titre" value="{{ old('titre', $Activity->titre) }}" required>
            </div>
        </div>

        {{-- Date --}}
        <div class="field">
            <label class="label">Date</label>
            <div class="control">
                <input class="input" type="datetime-local" name="date" value="{{ old('date', \Carbon\Carbon::parse($Activity->date)->format('Y-m-d\TH:i')) }}" required>
            </div>
        </div>

        {{-- Prix --}}
        <div class="field">
            <label class="label">Prix (en FCFA)</label>
            <div class="control">
                <input class="input" type="number" step="0.01" name="prix" value="{{ old('prix', $Activity->prix) }}" required>
            </div>
        </div>

        {{-- Statut --}}
        <div class="field">
            <label class="label">Statut</label>
            <div class="control">
                <div class="select">
                    <select name="statut" required>
                        <option value="Terminée" {{ old('statut', $Activity->statut) == 'Terminée' ? 'selected' : '' }}>Terminée</option>
                        <option value="En cours" {{ old('statut', $Activity->statut) == 'En cours' ? 'selected' : '' }}>En cours</option>
                        <option value="À venir" {{ old('statut', $Activity->statut) == 'À venir' ? 'selected' : '' }}>À venir</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" rows="5" required>{{ old('description', $Activity->description) }}</textarea>
            </div>
        </div>

        {{-- Image actuelle --}}
        <div class="field">
            <label class="label">Image actuelle</label>
            <figure class="image is-4by3">
                <img src="{{ asset($Activity->image_path) }}" alt="Image actuelle">
            </figure>
        </div>

        {{-- Changer image --}}
        <div class="field">
            <label class="label">Nouvelle image (optionnelle)</label>
            <div class="control">
                <input class="input" type="file" name="image" accept="image/*">
            </div>
        </div>

        {{-- Vidéo actuelle --}}
        <div class="field">
            <label class="label">Vidéo actuelle</label>
            <video width="100%" height="auto" controls>
                <source src="{{ asset($Activity->video_path) }}" type="video/mp4">
                Votre navigateur ne supporte pas la lecture des vidéos.
            </video>
        </div>

        {{-- Changer vidéo --}}
        <div class="field">
            <label class="label">Nouvelle vidéo (optionnelle)</label>
            <div class="control">
                <input class="input" type="file" name="video" accept="video/mp4">
            </div>
        </div>

        {{-- Boutons --}}
        <div class="field mt-5">
            <div class="control">
                <button type="submit" class="button is-warning">💾 Enregistrer les modifications</button>
                <a href="{{ route('activities.index') }}" class="button is-light">← Retour</a>
            </div>
        </div>
    </form>

</div>
@endsection
