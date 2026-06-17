@csrf
 
<x-form.field name="titre" label="Titre">
    <x-form.input name="titre" :value="old('titre', $offreEmploi->titre ?? '')" required />
</x-form.field>
 
<x-form.field name="entreprise" label="Entreprise">
    <x-form.input name="entreprise" :value="old('entreprise', $offreEmploi->entreprise ?? '')" required />
</x-form.field>
 
<div class="grid gap-4 md:grid-cols-2">
    <x-form.field name="ville" label="Ville">
        <x-form.input name="ville" :value="old('ville', $offreEmploi->ville ?? '')" />
    </x-form.field>
 
    <x-form.field name="salaire" label="Salaire">
        <x-form.input name="salaire" :value="old('salaire', $offreEmploi->salaire ?? '')" />
    </x-form.field>
</div>
 
<x-form.field name="description" label="Description">
    <x-form.textarea name="description">{{ old('description', $offreEmploi->description ?? '') }}</x-form.textarea>
</x-form.field>
 
<label class="flex items-center gap-2 text-sm font-semibold text-slate-700">
    <input type="checkbox" name="est_active" value="1"
           @checked(old('est_active', $offreEmploi->est_active ?? true))>
    Offre active
</label>
 
<div class="flex flex-wrap gap-3">
    <x-button type="submit">Enregistrer</x-button>
    <x-button :href="route('admin.offres.index')" variant="secondary">Annuler</x-button>
</div>
