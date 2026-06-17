<x-layout :title="'Candidatures - ' . $offreEmploi->titre">
    <x-page-header
        eyebrow="Administration"
        :title="'Candidatures - ' . $offreEmploi->titre"
        :description="$offreEmploi->entreprise" />
 
    <div class="mb-4">
        <x-button :href="route('admin.offres.index')" variant="secondary">Retour aux offres</x-button>
    </div>
 
    <x-panel class="overflow-hidden p-0">
        <table class="w-full text-left text-sm">
            <thead class="bg-blue-800 text-white">
                <tr>
                    <th class="px-4 py-3">Candidat</th>
                    <th class="px-4 py-3">Courriel</th>
                    <th class="px-4 py-3">Téléphone</th>
                    <th class="px-4 py-3">Message</th>
                    <th class="px-4 py-3">CV</th>
                    <th class="px-4 py-3">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse ($candidatures as $candidature)
                    <tr class="hover:bg-slate-800">
                        <td class="px-4 py-3 font-semibold text-slate-400">{{ $candidature->prenom }} {{ $candidature->nom }}</td>
                        <td class="px-4 py-3 text-slate-200">{{ $candidature->courriel }}</td>
                        <td class="px-4 py-3 text-slate-400">{{ $candidature->telephone ?? '-' }}</td>
                        <td class="px-4 py-3 text-slate-200">{{ $candidature->message ?? '-' }}</td>
                        <td class="px-4 py-3">
                            @if ($candidature->cv_path)
                                <a href="{{ route('admin.offres.candidatures.download', $candidature) }}" class="text-blue-600 hover:text-blue-800 underline text-xs">
                                    {{ $candidature->cv_original_name }}
                                </a>
                            @else
                                <span class="text-slate-400">-</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-slate-200">{{ $candidature->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-slate-600">
                            Aucune candidature pour cette offre.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-panel>
</x-layout>
