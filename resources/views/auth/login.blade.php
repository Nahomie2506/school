<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
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
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="mt-2 text-xl font-bold text-gray-800">Connexion</h2>
            <p class="text-sm text-gray-500 mt-1">
                Entrez vos identifiants pour accéder à votre compte.
            </p>
        </div>

        <!-- Message de session -->
        @if (session('status'))
            <div class="mb-4 text-green-700 text-center bg-green-100 p-2 rounded">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulaire -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                @error('email')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Mot de passe -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                @error('password')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Se souvenir -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" name="remember"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">
                    Se souvenir de moi
                </label>
            </div>

            <!-- Actions -->
            <div class="flex justify-between items-center mb-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                        Mot de passe oublié ?
                    </a>
                @endif
            </div>

            <!-- Bouton -->
            <div>
                <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    Connexion
                </button>
            </div>
        </form>

        <!-- Lien vers l'inscription -->
        <div class="mt-6 text-center">
            <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline">
                Vous n'avez pas encore de compte ? Inscrivez-vous
            </a>
        </div>
    </div>

</body>
</html>
