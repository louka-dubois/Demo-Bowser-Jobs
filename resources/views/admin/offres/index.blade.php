<x-layout title="Administration - Offres">
    <div class="flex flex-wrap items-start justify-between gap-4">
        <x-page-header
            eyebrow="Administration"
            title="Gestion des offres d'emploi"
            description="Ajoutez, modifiez ou supprimez les offres publiées sur le site." />
 
        <x-button :href="route('admin.offres.create')">Ajouter une offre</x-button>
    </div>
 
    <x-panel class="overflow-hidden p-0">
        <table class="w-full text-left text-sm">
            <thead class="bg-orange-600/20 text-white">
                <tr>
                    <th class="px-4 py-3 rounded-tl-lg">Titre</th>
                    <th class="px-4 py-3">Entreprise</th>
                    <th class="px-4 py-3">Statut</th>
                    <th class="px-4 py-3">Candidatures</th>
                    <th class="px-4 py-3 text-right rounded-tr-lg">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800">
                @forelse ($offres as $offre)
                    <tr class="hover:bg-slate-800">
                        <td class="px-4 py-3 font-semibold text-slate-100">{{ $offre->titre }}</td>
                        <td class="px-4 py-3 text-slate-400">{{ $offre->entreprise }}</td>
                        <td class="px-4 py-3">
                            <x-simple-badge :danger="!$offre->est_active">
                                {{ $offre->est_active ? 'Active' : 'Inactive' }}
                            </x-simple-badge>
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.offres.candidatures.index', $offre) }}"
                               class="font-semibold text-orange-500 underline-offset-4 hover:underline">
                                {{ $offre->candidatures_count }} candidature(s)
                            </a>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex justify-end gap-2">
                                <x-button :href="route('admin.offres.edit', $offre)" 
                                    variant="secondary">Modifier</x-button>
                                <form method="POST" action="{{ route('admin.offres.destroy', $offre) }}" 
                                    onsubmit="return confirm('Supprimer cette offre?')">
                                    @csrf
                                    @method('DELETE')
                                    <x-button type="submit">Supprimer</x-button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-slate-600">Aucune offre.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-panel>
</x-layout>
