@extends('layouts.app')

@section('content')
<section>
    <h1>À propos de l’Amicale des Étudiants Burkinabè de l’ESMT 🇧🇫</h1>
    <p>L’Amicale a été fondée pour rassembler, représenter et soutenir tous les étudiants burkinabè inscrits à l’ESMT. Elle incarne l’unité, la solidarité, le respect mutuel et la valorisation de notre culture.</p>
</section>

<section style="margin-top: 2rem;">
    <h2>🎯 Nos missions</h2>
    <ul style="padding-left: 1.5rem; line-height: 1.8;">
        <li>🔗 Favoriser l’intégration des nouveaux étudiants à l’ESMT</li>
        <li>🎓 Accompagner la réussite académique et humaine des membres</li>
        <li>🎉 Organiser des activités culturelles, sportives et sociales</li>
        <li>🌍 Créer un lien durable entre les anciens et les nouveaux</li>
        <li>🤝 Promouvoir l’entraide et la fraternité entre étudiants burkinabè</li>
    </ul>
</section>

<section style="margin-top: 2rem;">
    <h2>🌍 Pourquoi une amicale burkinabè à l’ESMT ?</h2>
    <p>Loin de notre pays, il est essentiel d’avoir une structure qui nous unit, nous accompagne et valorise notre identité. L’amicale est un espace d’échange, de partage d’expériences, et de construction collective pour les étudiants originaires du Burkina Faso.</p>
</section>

<section style="margin-top: 2rem;">
    <h2>✅ Nos actions concrètes</h2>
    <ul style="padding-left: 1.5rem; line-height: 1.8;">
        <li>📥 Accueil des nouveaux arrivants avec des conseils pratiques</li>
        <li>🏀 Sorties culturelles, sportives, conférences</li>
        <li>🎊 Célébration de la fête nationale burkinabè à l’ESMT</li>
        <li>🤝 Mise en lien avec les anciens pour parrainage et mentorat</li>
    </ul>
</section>

<section style="margin-top: 2rem;">
    <h2>📣 Un mot de notre bureau</h2>
    <blockquote style="font-style: italic; background: #f9f9f9; padding: 1rem; border-left: 5px solid #900C3F;">
        “Nous croyons en la force de notre communauté. En tant qu’étudiants burkinabè à l’ESMT, nous sommes plus forts ensemble. Notre amicale est notre maison, notre repère, notre fierté.”
    </blockquote>
</section>

<section style="margin-top: 3rem;">
    <h2>🤝 Notre lien avec la FEFAS 🇧🇫</h2>

    <p>L’Amicale des Étudiants Burkinabè de l’ESMT (AEB-ESMT) est officiellement rattachée à la <strong>Fédération des Étudiants du Faso au Sénégal (FEFAS)</strong>.</p>

    <p>La FEFAS est une structure faîtière qui regroupe l’ensemble des amicales burkinabè présentes dans les établissements supérieurs du Sénégal. Elle joue un rôle essentiel dans :</p>

    <ul style="padding-left: 1.5rem; line-height: 1.8;">
        <li>🛡️ Défense des intérêts des étudiants burkinabè auprès de l’ambassade</li>
        <li>🤝 Coordination des amicales burkinabè au Sénégal</li>
        <li>📣 Rencontres inter-amicales et activités fédératrices</li>
        <li>🎓 Soutien administratif, social et culturel des étudiants</li>
    </ul>

    <p>Nous travaillons en étroite collaboration avec la FEFAS pour porter la voix des étudiants et renforcer la solidarité au sein de notre diaspora estudiantine.</p>

    <div style="margin-top: 2rem; display: flex; justify-content: center;">
        <div style="text-align: center; width: 250px; background-color: #fff; border-radius: 10px; padding: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
            <img src="{{ asset('images/membres/president_fefas.jpg') }}" alt="Président FEFAS" style="width: 100%; border-radius: 10px;">
            <h4 style="margin-top: 1rem;">Ephrem Gwenael OUEDRAOGO</h4>
            <p style="color: #666;">Président de la FEFAS<br>Mandat 2024 – 2025</p>
            <blockquote style="font-style: italic; font-size: 0.9rem; color: #444;">“Unir, défendre, représenter chaque étudiant burkinabè au Sénégal.”</blockquote>
        </div>
    </div>
</section>

{{-- 🌐 Navigation vers les autres sections --}}
<section style="margin-top: 3rem;">
    <h2>🔗 Découvrir d’autres sections du site</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; justify-content: center; margin-top: 1rem;">
        <a href="{{ url('/activites') }}" class="button" style="min-width: 200px; text-align: center;">📅 Activités organisées</a>
        <a href="{{ url('/bureau') }}" class="button" style="min-width: 200px; text-align: center;">👥 Bureau actuel</a>
        <a href="{{ url('/anciens') }}" class="button" style="min-width: 200px; text-align: center;">🎓 Nos anciens</a>
        <a href="{{ url('/vie-a-dakar') }}" class="button" style="min-width: 200px; text-align: center;">🌍 Vie à Dakar</a>
        <a href="{{ url('/contact') }}" class="button" style="min-width: 200px; text-align: center;">📬 Contact</a>
    </div>
</section>
@endsection
