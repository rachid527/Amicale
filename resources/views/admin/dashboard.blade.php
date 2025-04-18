@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title has-text-centered mb-6">📊 Tableau de bord de l’administrateur</h1>

    {{-- Statistiques des activités --}}
    <div class="columns is-multiline is-variable is-6">
        <div class="column is-one-third">
            <div class="box has-background-primary-light has-text-centered">
                <p class="subtitle is-6 has-text-primary">Activités totales</p>
                <p class="title is-2">{{ $total }}</p>
            </div>
        </div>

        <div class="column is-one-third">
            <div class="box has-background-success-light has-text-centered">
                <p class="subtitle is-6 has-text-success">À venir</p>
                <p class="title is-2">{{ $aVenir }}</p>
            </div>
        </div>

        <div class="column is-one-third">
            <div class="box has-background-danger-light has-text-centered">
                <p class="subtitle is-6 has-text-danger">Terminées</p>
                <p class="title is-2">{{ $terminees }}</p>
            </div>
        </div>
    </div>

    {{-- Liens rapides --}}
    <div class="buttons is-centered mt-5">
        <a href="{{ route('admin.activities.index') }}" class="button is-link is-medium">
            ⚙️ Gérer les activités
        </a>
    </div>

    {{-- Déconnexion --}}
    <form action="{{ route('admin.logout') }}" method="POST" class="has-text-centered mt-4">
        @csrf
        <button class="button is-danger is-light is-small">🔓 Déconnexion</button>
    </form>
</div>
@endsection
