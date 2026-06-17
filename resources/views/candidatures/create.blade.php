<x-layout title="Postuler">
    <x-page-header
        eyebrow="Candidature"
        :title="'Postuler - ' . $offreEmploi->titre"
        :description="$offreEmploi->entreprise" />

    <x-panel class="max-w-3xl">
        <form method="POST" action="{{ route('candidatures.store', $offreEmploi) }}" enctype="multipart/form-data" class="space-y-4" id="candidature-form">
            @csrf

            <div class="grid gap-4 md:grid-cols-2">
                <x-form.field name="prenom" label="Prénom">
                    <x-form.input name="prenom" :value="old('prenom')" required />
                </x-form.field>

                <x-form.field name="nom" label="Nom">
                    <x-form.input name="nom" :value="old('nom')" required />
                </x-form.field>
            </div>

            <x-form.field name="courriel" label="Courriel">
                <x-form.input type="email" name="courriel" :value="old('courriel')" required />
            </x-form.field>

            <x-form.field name="telephone" label="Téléphone">
                <x-form.input name="telephone" :value="old('telephone')" />
            </x-form.field>

            <x-form.field name="message" label="Message">
                <x-form.textarea name="message">{{ old('message') }}</x-form.textarea>
            </x-form.field>

            <x-form.field name="cv" label="Curriculum vitæ (CV)">
                <input id="cv" name="cv" type="file" accept=".pdf,.doc,.docx,.txt,.rtf,.odt"
                       class="w-full rounded-lg border border-slate-900 bg-slate-950 text-slate-300 px-3 py-2 shadow-sm focus:border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-100 file:mr-3 file:rounded file:border-0 file:bg-blue-800 file:px-3 file:py-1 file:text-sm file:text-white hover:file:bg-blue-700" required />
                <p class="mt-1 text-xs text-slate-500">Formats acceptés : PDF, DOC, DOCX, TXT, RTF, ODT. Maximum 2 Mo.</p>
                <p id="cv-error" class="mt-1 hidden text-sm text-red-700"></p>
                @error('cv')
                    <p class="text-sm text-red-700">{{ $message }}</p>
                @enderror
            </x-form.field>

            <x-button type="submit">Envoyer ma candidature</x-button>
        </form>
    </x-panel>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('cv');
            const error = document.getElementById('cv-error');
            const allowedExtensions = ['pdf', 'doc', 'docx', 'txt', 'rtf', 'odt'];
            const maxSize = 2 * 1024 * 1024;

            input.addEventListener('change', function () {
                error.classList.add('hidden');
                error.textContent = '';

                const file = this.files[0];
                if (!file) return;

                const extension = file.name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(extension)) {
                    error.textContent = 'Format de fichier non accepté. Formats autorisés : PDF, DOC, DOCX, TXT, RTF, ODT.';
                    error.classList.remove('hidden');
                    this.value = '';
                    return;
                }

                if (file.size > maxSize) {
                    error.textContent = 'Le fichier est trop volumineux. Taille maximale : 2 Mo.';
                    error.classList.remove('hidden');
                    this.value = '';
                    return;
                }
            });
        });
    </script>
</x-layout>
