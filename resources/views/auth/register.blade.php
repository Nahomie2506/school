<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ✅ Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-100 via-pink-100 to-red-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-lg bg-white rounded-xl shadow-xl p-8">
        <!-- En-tête -->
        <div class="text-center mb-6">
            <div class="w-16 h-16 mx-auto bg-pink-100 text-pink-600 flex items-center justify-center rounded-full shadow">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
            </div>
            <h2 class="mt-2 text-xl font-bold text-gray-800">Créer un compte</h2>
            <p class="text-sm text-gray-500 mt-1">
                Remplissez les informations pour vous inscrire.
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nom -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-400 focus:outline-none">
                @error('name')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-400 focus:outline-none">
                @error('email')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Mot de passe -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-400 focus:outline-none">
                @error('password')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmation du mot de passe -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmation</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-400 focus:outline-none">
                @error('password_confirmation')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Rôle -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Rôle</label>
                <select name="role" id="role" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-400 focus:outline-none bg-white">
                    <option value="">Sélectionner un rôle</option>
                    <option value="etudiant">Étudiant</option>
                    <option value="formateur">Formateur</option>
                    <option value="parent">Parent</option>
                    <option value="admin">Admin</option>
                </select>
                @error('role')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bouton -->
            <div>
                <button type="submit"
                        class="w-full py-2 px-4 bg-pink-600 text-white font-semibold rounded-lg shadow hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400">
                    S'inscrire
                </button>
            </div>
        </form>

        <!-- Lien vers connexion -->
        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm text-pink-600 hover:underline">
                Déjà inscrit ? Connectez-vous
            </a>
        </div>
    </div>

</body>
</html>
