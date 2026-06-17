@props(['title' => 'WS2 Emplois'])
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans text-slate-800 relative bg-cover bg-center"
      style="background-image: url('https://www.lemondedemario.fr/img/lieux/3/chateau-de-bowser-mkw.png');">

    <div class="absolute inset-0 bg-gradient-to-t from-black/95 to-black/55"></div>

    <!-- Page content -->
    <div class="relative">
        <header class="sticky top-0 z-20 text-white bg-cover bg-center relative"
        style="background-image: url('https://www.lemondedemario.fr/img/lieux/3/chateau-de-bowser-mkdd.png');">
        
            <div class="absolute inset-0 bg-gradient-to-r from-green-900/75 to-orange-900/75 z-0"></div>
            
            <div class="mx-auto flex w-[min(1180px,calc(100%-2rem))] flex-wrap items-center justify-between gap-4 py-4">
                <a href="{{ route('emplois.index') }}" class="inline-flex items-center text-xl font-bold text-white z-1">
                    <img
                        src="https://mario.wiki.gallery/images/9/93/SMB_Bowser_Dot_Artwork.png"
                        alt="Bowser"
                        class="h-10 w-10 z-2"
                    >
                    Chateau de Bowser: Emplois
                </a>
                
                <nav class="flex flex-wrap items-center gap-3 z-1">
                    <x-nav-link :href="route('emplois.index')" :active="request()->routeIs('emplois.*') || request()->routeIs('candidatures.*')">
                        Offres
                    </x-nav-link>
                
                    <x-nav-link :href="route('admin.offres.index')" :active="request()->routeIs('admin.*')">
                        Administration
                    </x-nav-link>
                </nav>
            </div>
        </header>
    
        <main class="mx-auto w-[min(1180px,calc(100%-2rem))] py-6">
            <x-alert />
            {{ $slot }}
        </main>
    </div>
</body>
</html>
