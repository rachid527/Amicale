@extends('layouts.app')

@section('content')

    <section>
        <h1>Le Bureau actuel de l’Amicale 🇧🇫</h1>
        <p>Voici les membres du bureau actuellement en charge de l’Amicale des Étudiants Burkinabè de l’ESMT. Ils sont là pour vous accompagner, organiser la vie communautaire et représenter les intérêts des étudiants burkinabè au sein de l'école.</p>
    </section>

    <section style="margin-top: 2rem;">
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
            <!-- Exemple d’un membre du bureau -->
            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/president.jpg') }}" alt="Président" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Rachid OUEDRAOGO</h3>
                <p style="color: #555;">Président</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/hamed.jpg') }}" alt="Hamed BONKOUNGOU" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Hamed BONKOUNGOU</h3>
                <p style="color: #555;">Secrétaire Générale</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/doriane.jpg') }}" alt="Doriane SOME" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Doriane SOME</h3>
                <p style="color: #555;">Responsable Organisation</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/franck.jpg') }}" alt="Franck KABORE" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Franck KABORE</h3>
                <p style="color: #555;">Responsable Adjoint Organisation</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/stevy.jpg') }}" alt="Stevy COMPAORE" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Stevy COMPAORE</h3>
                <p style="color: #555;">Responsable Communication</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/flora.jpg') }}" alt="Flora" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Flora</h3>
                <p style="color: #555;">Responsable Adjoint Communication</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/annick.jpg') }}" alt="Annick IDOGO" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Annick IDOGO</h3>
                <p style="color: #555;">Responsable Tresorerie</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/manuella.jpg') }}" alt="Manuella OUEDRAOGO" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Manuella OUEDRAOGO</h3>
                <p style="color: #555;">Responsable Adjoint Tresorerie</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/ghislain.jpg') }}" alt="Ghislain NONGANA" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Ghislain NONGANA</h3>
                <p style="color: #555;">Responsable Sport</p>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/membres/bougoum.jpg') }}" alt="Cheick BOUGOUM" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Cheick BOUGOUM</h3>
                <p style="color: #555;">Responsable Adjoint Sport</p>
            </div>

            <!-- Tu peux ajouter autant de membres que nécessaire -->
        </div>
    </section>

    <section style="margin-top: 3rem;">
        <h2>Nos anciens présidents</h2>
        <p>Voici la liste des présidents qui ont dirigé l’Amicale avant nous, avec fierté et engagement.</p>
    
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; margin-top: 2rem;">
            <!-- Ancien 1 -->
            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/anciens_presidents/fadyl.jpg') }}" alt="Fadyl BAMBA" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Fadyl BAMBA</h3>
                <p style="color: #555;">Président 2023–2024</p>
                <blockquote style="font-style: italic; font-size: 0.9rem;">“L’unité fait notre force.”</blockquote>
            </div>
    
            <!-- Ancien 2 -->
            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/anciens_presidents/karen.jpg') }}" alt="Karen OUEDRAOGO" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Karen OUEDRAOGO</h3>
                <p style="color: #555;">Présidente 2022–2023</p>
                <blockquote style="font-style: italic; font-size: 0.9rem;">“Être ensemble pour aller loin.”</blockquote>
            </div>
    
            <!-- Ancien 3 -->
            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/anciens_presidents/ousmane.jpg') }}" alt="Ousmane DIALLO" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">Ousmane DIALLO</h3>
                <p style="color: #555;">Président 2021–2022</p>
                <blockquote style="font-style: italic; font-size: 0.9rem;">“Bâtir un réseau solide.”</blockquote>
            </div>

            <div style="text-align: center; width: 200px;">
                <img src="{{ asset('images/anciens_presidents/?.jpg') }}" alt="?" style="width: 100%; border-radius: 8px;">
                <h3 style="margin: 0.5rem 0;">?</h3>
                <p style="color: #555;">Président 2021–2022</p>
                <blockquote style="font-style: italic; font-size: 0.9rem;">“Bâtir un réseau solide.”</blockquote>
            </div>

        </div>
    </section>
    

@endsection
