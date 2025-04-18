@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="title has-text-centered">➕ Ajouter une activité</h1>

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

    {{-- Formulaire --}}
    <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Titre --}}
        <div class="field">
            <label class="label">Titre</label>
            <div class="control">
                <input class="input" type="text" name="titre" value="{{ old('titre') }}" required>
            </div>
        </div>

        {{-- Date --}}
        <div class="field">
            <label class="label">Date</label>
            <div class="control">
                <input class="input" type="datetime-local" name="date" value="{{ old('date') }}" required>
            </div>
        </div>

        {{-- Prix --}}
        <div class="field">
            <label class="label">Prix (FCFA)</label>
            <div class="control">
                <input class="input" type="number" step="0.01" name="prix" value="{{ old('prix') }}" required>
            </div>
        </div>

        {{-- Statut --}}
        <div class="field">
            <label class="label">Statut</label>
            <div class="control">
                <div class="select">
                    <select name="statut" required>
                        <option value="">-- Sélectionnez un statut --</option>
                        <option value="Terminée" {{ old('statut') == 'Terminée' ? 'selected' : '' }}>Terminée</option>
                        <option value="En cours" {{ old('statut') == 'En cours' ? 'selected' : '' }}>En cours</option>
                        <option value="À venir" {{ old('statut') == 'À venir' ? 'selected' : '' }}>À venir</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" rows="5" required>{{ old('description') }}</textarea>
            </div>
        </div>

        {{-- Image --}}
        <div class="field">
            <label class="label">Image de l’activité</label>
            <div class="control">
                <input class="input" type="file" name="image" accept="image/*" required>
            </div>
        </div>

        {{-- Vidéo --}}
        <div class="field">
            <label class="label">Vidéo de l’activité</label>
            <div class="control">
                <input class="input" type="file" name="video" accept="video/mp4" required>
            </div>
        </div>

        {{-- Boutons --}}
        <div class="field mt-5">
            <div class="control">
                <button type="submit" class="button is-success">✅ Créer</button>
                <a href="{{ route('activities.index') }}" class="button is-light">← Annuler</a>
            </div>
        </div>
    </form>

</div>
@endsection
