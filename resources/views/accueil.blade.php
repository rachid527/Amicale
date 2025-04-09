@extends('layouts.app')

@section('content')

    {{-- Image plein écran, indépendante --}}
    <div class="header-full">
        <section class="header-image">
            <div class="overlay">
                <h1>Le Bureau actuel de l’Amicale 🇧🇫</h1>
                <p>Solidarité, Fraternité, Leadership</p>
            </div>
        </section>
    </div>

    {{-- Contenu centré dans la boîte blanche --}}
    <div class="main-content">
        <section>
            <h1>Bienvenue à l’Amicale des Étudiants Burkinabè de l’ESMT 🇧🇫</h1>
            <p>L’amicale a pour mission de créer un lien fort entre les étudiants burkinabè, favoriser leur intégration et promouvoir la solidarité.</p>
        </section>

        <section style="margin-top:2rem;">
            <h2>Quelques photos de nos activités récentes 📸</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                <img src="{{ asset('storage/activites/image1.jpg') }}" alt="Activité 1" style="width: 250px;">
                <img src="{{ asset('storage/activites/image2.jpg') }}" alt="Activité 2" style="width: 250px;">
                <img src="{{ asset('storage/activites/image3.jpg') }}" alt="Activité 3" style="width: 250px;">
                <img src="{{ asset('storage/activites/image3.jpg') }}" alt="Activité 3" style="width: 250px;">
                <img src="{{ asset('storage/activites/image3.jpg') }}" alt="Activité 3" style="width: 250px;">
                <img src="{{ asset('storage/activites/image3.jpg') }}" alt="Activité 3" style="width: 250px;">
            </div>
        </section>

        <section style="margin-top:2rem;">
            <a href="{{ url('/a-propos') }}" style="background-color: #900C3F; color: white; padding: 0.8rem 1.5rem; border-radius: 5px; text-decoration: none;">Découvrir l’amicale</a>
        </section>
    </div>
    <section style="margin-top: 3rem; text-align: center;">
        <h2>📲 Suivez notre communauté sur Instagram</h2>
        <p>Ne rate aucune info, abonne-toi à notre page officielle !</p>
        <img src="{{ asset('images/instagram.jpg') }}" alt="Instagram QR Code" style="width: 250px; margin-top: 1rem; border-radius: 10px;">
        <p style="margin-top: 1rem; font-weight: bold; color: #900C3F;">@communaute_burkinabe_esmt</p>
    </section>
    

@endsection
