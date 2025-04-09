<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amicale des Étudiants Burkinabè - ESMT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Barre de navigation -->
    <header class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo AEB ESMT" style="height: 40px; vertical-align: middle;">
            <span style="margin-left: 8px; color: white; font-weight: 600;">AEB ESMT</span>
        </div>
        

        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>

        <nav class="nav-links">
            <a href="{{ url('/') }}">Accueil</a>
            <div class="dropdown">
                <span>L’Amicale ▼</span>
                <div class="dropdown-content">
                    <a href="{{ url('/a-propos') }}">À propos</a>
                    <a href="{{ url('/bureau') }}">Le bureau</a>
                    <a href="{{ url('/vie-a-dakar') }}">Vie à Dakar</a>
                </div>
            </div>
            <a href="{{ url('/activities') }}">Activités</a>
            <a href="{{ url('/anciens') }}">Nos Anciens</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <!-- Contenu de chaque page -->
    <main class="main-content">
        @yield('content')
    </main>

   <!-- Pied de page -->
   <footer class="footer">
    <p>&copy; {{ date('Y') }} AEB ESMT | Fièrement par les étudiants burkinabè au Sénégal 🇧🇫</p>

    <p>
        <a href="https://wa.me/22660027838" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a> |
        <a href="mailto:amicale.bf@esmt.sn" target="_blank"><i class="fas fa-envelope"></i> Gmail</a> |
        <a href="https://instagram.com/communaute_burkinabe_esmt" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
    </p>
</footer>


</body>
</html>
