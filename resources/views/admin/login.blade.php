@extends('layouts.admin')

@section('content')
<div class="container" style="max-width: 400px; margin-top: 50px;">
    <h2 class="title has-text-centered">Connexion Administrateur</h2>

    @if ($errors->any())
        <div class="notification is-danger">
            @foreach ($errors->all() as $error)
                <p>• {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST">
        @csrf

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input type="email" name="email" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input type="password" name="password" class="input" required>
            </div>
        </div>

        <div class="field mt-4">
            <button type="submit" class="button is-primary is-fullwidth">Se connecter</button>
        </div>
    </form>
</div>
@endsection
