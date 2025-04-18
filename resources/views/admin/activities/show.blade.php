@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="title has-text-centered mb-5">📝 Détails de l'activité</h1>

    <div class="box">
        <div class="columns">
            <div class="column is-half">
                <p><strong>ID :</strong> {{ $activity->id }}</p>
                <p><strong>Titre :</strong> {{ $activity->titre }}</p>
                <p><strong>Date :</strong> {{ \Carbon\Carbon::parse($activity->date)->format('d/m/Y H:i') }}</p>
                <p><strong>Prix :</strong> 
                    {{ is_numeric($activity->prix) ? number_format($activity->prix, 0, ',', ' ') . ' FCFA' : $activity->prix }}
                </p>

                {{-- Statut calculé par rapport à la date --}}
                @php
                    $now = now();
                    $date = \Carbon\Carbon::parse($activity->date);
                @endphp

                <p><strong>Statut :</strong>
                    @if ($date->isPast())
                        <span class="tag is-danger">Passée</span>
                    @elseif ($date->isToday())
                        <span class="tag is-warning">En cours</span>
                    @else
                        <span class="tag is-success">À venir</span>
                    @endif
                </p>
            </div>

            <div class="column is-half">
                <p><strong>Description :</strong></p>
                <div class="content" style="background: #f9f9f9; padding: 1rem; border-radius: 6px;">
                    {{ $activity->description }}
                </div>
            </div>
        </div>

        <div class="columns mt-5">
            <div class="column is-half">
                <h3 class="subtitle">📸 Image de l'activité</h3>
                <figure class="image is-4by3">
                    <img src="{{ asset($activity->image_path) }}" alt="Image de l'activité">
                </figure>
            </div>

            <div class="column is-half">
                <h3 class="subtitle">🎥 Vidéo de l'activité</h3>
                <video width="100%" controls>
                    <source src="{{ asset($activity->video_path) }}" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
            </div>
        </div>
    </div>

    {{-- Boutons --}}
    <div class="buttons mt-4">
        <a href="{{ route('admin.activities.index') }}" class="button is-light">← Retour à la liste</a>
        <a href="{{ route('admin.activities.edit', $activity->id) }}" class="button is-warning">✏️ Modifier</a>

        <form action="{{ route('admin.activities.destroy', $activity->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cette activité ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger">🗑️ Supprimer</button>
        </form>
    </div>

</div>
@endsection
