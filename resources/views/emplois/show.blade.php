<x-layout :title="$offreEmploi->titre">
    <x-page-header
        eyebrow="Offre d'emploi"
        :title="$offreEmploi->titre"
        :description="$offreEmploi->entreprise . ' · ' . ($offreEmploi->ville ?? 'Lieu à confirmer')" />
 
    <x-panel class="space-y-5">
        @if ($offreEmploi->salaire)
            <x-badge>{{ $offreEmploi->salaire }}</x-badge>
        @endif
 
        <div class="prose max-w-none text-slate-700">
            <p>{{ $offreEmploi->description }}</p>
        </div>
 
        <div class="flex flex-wrap gap-3">
            <x-button :href="route('candidatures.create', $offreEmploi)">Postuler</x-button>
            <x-button :href="route('emplois.index')" variant="secondary">Retour aux offres</x-button>
        </div>
    </x-panel>
</x-layout>