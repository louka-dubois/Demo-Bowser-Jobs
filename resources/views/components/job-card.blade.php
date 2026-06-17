@props(['offre'])
 
<a href="{{ route('emplois.show', $offre) }}"
   class="block rounded-xl border border-slate-800 bg-slate-900/75 p-4 transition hover:-translate-y-0.5 hover:bg-black/50 
       hover:shadow-md">
    <div class="flex flex-wrap items-start justify-between gap-3">
        <div>
            <h2 class="text-lg font-bold text-slate-300">{{ $offre->titre }}</h2>
            <p class="mt-1 text-sm text-slate-500">{{ $offre->entreprise }} · {{ $offre->ville ?? 'Télétravail / 
                hybride' }}</p>
        </div>
        @if ($offre->salaire)
            <x-badge>{{ $offre->salaire }}</x-badge>
        @endif
    </div>
 
    <p class="mt-3 line-clamp-3 text-sm text-green-600">
        {{ $offre->description }}
    </p>
</a>
