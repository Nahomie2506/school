<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de l’adresse e-mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ✅ Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-100 to-purple-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">
        <!-- En-tête -->
        <div class="text-center mb-6">
            <div class="w-14 h-14 mx-auto bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0h.01M8 12a4 4 0 104 4 4 4 0 00-4-4z" />
                </svg>
            </div>
            <h2 class="mt-2 text-xl font-semibold text-gray-800">Vérification de l’adresse e-mail</h2>
            <p class="text-sm text-gray-600 mt-2">
                Merci pour votre inscription ! Avant de commencer, veuillez vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer. <br>
                Si vous n’avez pas reçu l’e-mail, nous pouvons vous en envoyer un autre.
            </p>
        </div>

        <!-- Message de succès -->
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm text-green-600 text-center">
                Un nouveau lien de vérification a été envoyé à l’adresse e-mail que vous avez fournie lors de l’inscription.
            </div>
        @endif

        <!-- Boutons -->
        <div class="mt-4 flex items-center justify-between gap-4">
            <!-- Formulaire renvoyer l'email -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    Renvoyer l’e-mail
                </button>
            </form>

            <!-- Formulaire déconnexion -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full py-2 px-4 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    Se déconnecter
                </button>
            </form>
        </div>
    </div>

</body>
</html>
