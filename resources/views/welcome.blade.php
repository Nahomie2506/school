<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bienvenue - T.T.G Network</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', system-ui, sans-serif;
      background-color: #111827;
      color: #f9fafb;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header, footer {
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 1.5rem;
    }

    header h1 {
      font-size: 2rem;
      font-weight: 700;
      color: #facc15;
    }

    nav {
      margin-top: 0.5rem;
    }

    nav a {
      margin-right: 1rem;
      text-decoration: none;
      color: #facc15;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #fde047;
    }

    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
      text-align: center;
    }

    .content {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 1.5rem;
      padding: 2.5rem;
      max-width: 750px;
      width: 100%;
      backdrop-filter: blur(8px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
      animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
      color: #facc15;
    }

    h2 span {
      color: #fde047;
    }

    p {
      font-size: 1.125rem;
      color: #e5e7eb;
      margin-bottom: 1.5rem;
    }

    .quote {
      font-style: italic;
      font-size: 1rem;
      color: #facc15;
      margin-bottom: 2rem;
    }

    .btn {
      display: inline-block;
      padding: 0.75rem 2rem;
      margin: 0.5rem;
      border-radius: 9999px;
      font-weight: 600;
      text-decoration: none;
      background-color: #facc15;
      color: #111827;
      transition: background-color 0.3s ease, transform 0.3s ease;
      box-shadow: 0 5px 15px rgba(250, 204, 21, 0.3);
    }

    .btn:hover {
      background-color: #fde047;
      transform: translateY(-2px);
    }

    footer {
      background-color: #1f2937;
      text-align: center;
      font-size: 0.875rem;
      color: #d1d5db;
      padding: 1rem;
    }

    [data-fade] {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease-out;
    }

    [data-fade].show {
      opacity: 1;
      transform: translateY(0);
    }

    @media (max-width: 480px) {
      h2 {
        font-size: 2rem;
      }

      .btn {
        width: 100%;
        margin: 0.5rem 0;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>T.T.G Network</h1>
    <nav>
      <a href="{{ route('register') }}">Créer un compte</a>
      <a href="{{ route('login') }}">Se connecter</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <div class="content" data-fade>
      <h2>Bienvenue sur <span>T.T.G Network</span></h2>
      <p>
       T.T.G Network est bien plus qu’un simple outil : c’est un compagnon fiable, pensé pour simplifier votre quotidien, structurer vos données et vous faire gagner du temps. Que ce soit pour suivre les étudiants, organiser les cours, gérer les notes ou coordonner les équipes, notre solution place l’efficacité, la clarté et la tranquillité d’esprit au cœur de votre expérience.
      </p>
      <p class="quote">
        « Une bonne gestion aujourd’hui, c’est du temps gagné demain.  »
      </p>
      <div>
        <a href="{{ route('register') }}" class="btn">Créer un compte</a>
        <a href="{{ route('login') }}" class="btn">Se connecter</a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    © {{ date('Y') }} <strong>T.T.G Network</strong>. Tous droits réservés.
  </footer>

  <!-- Animation Script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll('[data-fade]').forEach(el => {
        setTimeout(() => el.classList.add('show'), 200);
      });
    });
  </script>
</body>
</html>
