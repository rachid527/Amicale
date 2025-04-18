<!-- resources/views/accueil.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil - AEB</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #006633;
      color: white;
      padding: 20px;
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
    }

    nav {
      margin-top: 10px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    .hero {
      background: url('https://lafefas.com/wp-content/uploads/2024/01/IMG_3683-scaled.jpg') center/cover no-repeat;
      color: white;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 10px;
      font-size: 40px;
    }

    .section {
      padding: 40px 20px;
      text-align: center;
    }

    .section h2 {
      color: #006633;
      margin-bottom: 20px;
    }

    footer {
      background-color: #003300;
      color: white;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">AEB - Association des Étudiants Burkinabè</div>
    <nav>
      <a href="#">Accueil</a>
      <a href="#">À propos</a>
      <a href="#">Activités</a>
      <a href="#">Galerie</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  <div class="hero">
    <h1>Bienvenue sur le site officiel de l’AEB</h1>
  </div>

  <div class="section">
    <h2>À propos de l’AEB</h2>
    <p>L’AEB est une association qui regroupe les étudiants Burkinabè dans notre institution. Elle vise la solidarité, l’intégration, le développement culturel et académique.</p>
  </div>

  <div class="section" style="background-color: #f2f2f2;">
    <h2>Nos Activités</h2>
    <p>Rencontres culturelles, conférences, week-ends d’intégration, actions sociales, tournois sportifs et bien plus encore !</p>
  </div>

  <footer>
    © 2025 AEB - Tous droits réservés
  </footer>

</body>
</html>
