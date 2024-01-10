<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Office</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito:400,700&display=swap" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="font-[Nunito] flex flex-col justify-between h-screen">
    <div class="bg-yellow-400 text-black py-8 shadow-xl">
        <div class="max-w-5xl mx-auto px-3">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl">
                    <a href="/"><img src="{{ asset('../uploads/TheOffice.png') }}" alt="Logo" class="w-1/2 h-1/2"></a>
                </h1>
                <nav class="flex space-x-20">
                    <a class="font-bold hover:underline underline-offset-8" href="/">Accueil</a>
                    <a class="font-bold hover:underline underline-offset-8" href="/matelas">Salles</a>
                    <a class="font-bold hover:underline underline-offset-8" href="/marques">Utilisateurs</a>
                                        
                </nav>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-3 py-8 w-full">
        @yield('content')
    </div>

    <footer class="bg-yellow-400 text-black py-8">
        <div class="max-w-5xl mx-auto px-3">
            <p class="font-bold text-center text-xl">The Office &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>