<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe oublié</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ✅ Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 via-indigo-100 to-purple-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-xl shadow-xl p-8">
        <!-- Logo ou icône -->
        <div class="text-center mb-6">
            <div class="w-16 h-16 mx-auto bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full shadow">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 12a9 9 0 100-18 9 9 0 000 18z" />
                </svg>
            </div>
            <h2 class="mt-2 text-xl font-bold text-gray-800">Mot de passe oublié</h2>
            <p class="text-sm text-gray-500 mt-1">
                Entrez votre email pour recevoir un lien de réinitialisation.
            </p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-green-700 text-center bg-green-100 p-2 rounded">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulaire -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                @error('email')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bouton -->
            <div class="mt-6">
                <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    Envoyer le lien de réinitialisation
                </button>
            </div>
        </form>

        <!-- Lien retour -->
        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">
                ← Retour à la connexion
            </a>
        </div>
    </div>

</body>
</html>
