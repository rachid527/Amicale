@extends('layouts.app')

@section('content')

    <section>
        <h1>Nos anciens étudiants 🇧🇫</h1>
        <p>Ils sont passés par les bancs de l’ESMT, ils ont porté haut les couleurs du Burkina Faso, et aujourd’hui, ils brillent dans le monde professionnel. Voici quelques-uns de nos anciens les plus actifs et inspirants.</p>
    </section>

    <section style="margin-top: 2rem;">
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
            <!-- Exemple d’un ancien -->
            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/papi.jpg') }}" alt="papi" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Papi</h3>
                <p>Développeur Application – Societe Prive Dakar</p>
                <p><em>Promo </em></p>
                <a href="https://www.linkedin.com/in/achel-ouedraogo-45634a276?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="button">Voir profil</a>
            </div>

            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/kabore.jpg') }}" alt="Hassan BOLLY" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Hassan BOLLY</h3>
                <p>Développeur Application – Societe Prive Dakar</p>
                <p><em>Promo 2020</em></p>
                <a href="" target="_blank" class="button">Voir profil</a>
            </div>

            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/samyr.jpg') }}" alt="Samyr" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Samy Christian</h3>
                <p>Developpeur Fullstack IT – Societe Prive de Telecommunication </p>
                <p><em>Promo 2021</em></p>
                <a href="" target="_blank" class="button">Voir profil</a>
            </div>

            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/karen.jpg') }}" alt="Karen OUEDRAOGO" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Karen OUEDRAOGO</h3>
                <p>Ingenieur D'affaires – Dakar</p>
                <p><em>Promo 2021</em></p>
                <a href="" target="_blank" class="button">Voir profil</a>
            </div>

            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/ousmane.jpg') }}" alt="Ousmane Diallo" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Ousmane DIALLO</h3>
                <p>Ingenieur de Conception Telecom Services – Dakar</p>
                <p><em>Promo 2021</em></p>
                <a href="" target="_blank" class="button">Voir profil</a>
            </div>

            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/lothaire.jpg') }}" alt="Lothaire BAZIE" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Lothaire BAZIE</h3>
                <p>Cheffe de projet IT – Dakar</p>
                <p><em>Promo 2021</em></p>
                <a href="" target="_blank" class="button">Voir profil</a>
            </div>

            <div style="width: 250px; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
                <img src="{{ asset('images/anciens/landry.jpg') }}" alt="Landry SANOU" style="width: 100%; border-radius: 8px;">
                <h3 style="margin-top: 1rem;">Landry SANOU</h3>
                <p>Ingenieur de Conception – Societe Prive Dakar</p>
                <p><em>Promo 2020</em></p>
                <a href="" target="_blank" class="button">Voir profil</a>
            </div>

            <!-- Tu peux ajouter d'autres anciens ici -->
        </div>
    </section>

    <section style="margin-top: 3rem;">
        <h2>🔗 Devenir parrain ou mentor</h2>
        <p>Si tu es un ancien de l’ESMT et que tu souhaites aider un étudiant actuel (orientation, conseils, insertion pro), contacte-nous :</p>
        <a href="{{ url('/contact') }}" class="button">Proposer mon aide</a>
    </section>

@endsection
