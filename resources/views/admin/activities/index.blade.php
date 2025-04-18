@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title has-text-centered">📋 Liste des activités</h1>

    {{-- Bouton créer une nouvelle activité --}}
    <div class="mb-5">
        <a href="{{ route('admin.activities.create') }}" class="button is-success">
            ➕ Créer une nouvelle activité
        </a>
    </div>

    {{-- Message flash --}}
    @if(session('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif

    {{-- Table des activités --}}
    <table class="table is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Prix</th>
                <th>Statut</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>
                        <img src="{{ asset($activity->image_path) }}" alt="Image activité" width="100">
                    </td>
                    <td>{{ $activity->titre }}</td>
                    <td>{{ \Carbon\Carbon::parse($activity->date)->format('d/m/Y H:i') }}</td>
                    <td>
                        {{ is_numeric($activity->prix) ? number_format($activity->prix, 0, ',', ' ') . ' FCFA' : $activity->prix }}
                    </td>
                    <td>
                        @php
                            $now = now();
                            $date = \Carbon\Carbon::parse($activity->date);
                        @endphp
                        @if ($date->isPast())
                            <span class="tag is-danger">Passée</span>
                        @elseif ($date->isToday())
                            <span class="tag is-warning">En cours</span>
                        @else
                            <span class="tag is-success">À venir</span>
                        @endif
                    </td>
                    <td>
                        <a class="button is-primary is-small" href="{{ route('admin.activities.show', $activity->id) }}">
                            Voir
                        </a>
                    </td>
                    <td>
                        <a class="button is-warning is-small" href="{{ route('admin.activities.edit', $activity->id) }}">
                            Modifier
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.activities.destroy', $activity->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $activities->links() }}
    </div>
</div>
@endsection
