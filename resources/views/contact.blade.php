@extends('layouts.app')

@section('content')

<section>
    <h1>📬 Contactez l’Amicale des Étudiants Burkinabè de l’ESMT</h1>
    <p>Vous avez une question, une demande ou souhaitez simplement nous écrire ? Voici comment nous joindre.</p>
</section>

<section style="margin-top: 2rem;">
    <h2>📞 Coordonnées officielles</h2>
    <ul style="list-style: none; padding: 0; line-height: 1.8;">
        <li><strong>📧 Email :</strong> <a href="mailto:amicale.bf@esmt.sn">amicale.bf@esmt.sn</a></li>
        <li><strong>📱 Téléphone / WhatsApp :</strong> <a href="https://wa.me/221771234567" target="_blank">+221 77 123 45 67</a></li>
        <li><strong>📍 Adresse :</strong> ESMT – Avenue Cheikh Anta Diop, Dakar, Sénégal</li>
    </ul>
</section>

<section style="margin-top: 3rem;">
    <h2>✉️ Formulaire de contact rapide</h2>
    <p style="margin-bottom: 1rem;">Remplis ce formulaire et nous reviendrons vers toi rapidement.</p>

    <form method="POST" action="#" style="max-width: 600px;">
        @csrf

        <div style="margin-bottom: 1rem;">
            <label for="nom"><strong>Nom complet</strong></label><br>
            <input type="text" id="nom" name="nom" required style="width: 100%; padding: 0.7rem; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="email"><strong>Email</strong></label><br>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 0.7rem; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="sujet"><strong>Sujet</strong></label><br>
            <input type="text" id="sujet" name="sujet" required style="width: 100%; padding: 0.7rem; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="message"><strong>Message</strong></label><br>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.7rem; border-radius: 5px; border: 1px solid #ccc;"></textarea>
        </div>

        <button type="submit" class="button">📨 Envoyer le message</button>
    </form>
</section>

<section style="margin-top: 3rem;">
    <h2>📍 Localisation</h2>
    <div style="margin-top: 1rem;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.5742119625096!2d-17.45474368516387!3d14.705786076139074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172c06aee5d4f%3A0xe132ec31dff0b9dc!2sESMT!5e0!3m2!1sfr!2ssn!4v1648234629294!5m2!1sfr!2ssn"
            width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</section>

<section style="margin-top: 3rem; text-align: center;">
    <h3>📸 Notre Instagram</h3>
    <img src="{{ asset('images/instagram.jpg') }}" alt="QR Instagram" style="width: 200px; border-radius: 10px;">
    <p style="margin-top: 0.5rem; color: #900C3F; font-weight: bold;">@communaute_burkinabe_esmt</p>
</section>


@endsection
