<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmer le mot de passe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ✅ Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-indigo-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">
        <!-- En-tête -->
        <div class="text-center mb-6">
            <div class="w-14 h-14 mx-auto bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3m3 4v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2m8-10a4 4 0 100 8 4 4 0 000-8z" />
                </svg>
            </div>
            <h2 class="mt-2 text-xl font-semibold text-gray-800">Confirmation du mot de passe</h2>
            <p class="text-sm text-gray-500 mt-1">
                Ceci est une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.
            </p>
        </div>

        <!-- Formulaire -->
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Champ mot de passe -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:outline-none">
                @error('password')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bouton -->
            <div class="flex justify-end">
                <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    Confirmer
                </button>
            </div>
        </form>

        <!-- Lien retour -->
        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">
                Retour à la page de connexion
            </a>
        </div>
    </div>

</body>
</html>
