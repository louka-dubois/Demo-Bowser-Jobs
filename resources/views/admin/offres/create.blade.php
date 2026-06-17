resources/views/admin/offres/create.blade.php et edit.blade.php
{{-- create.blade.php --}}
<x-layout title="Ajouter une offre">
    <x-page-header eyebrow="Administration" title="Ajouter une offre" />
    <x-panel class="max-w-3xl">
        <form method="POST" action="{{ route('admin.offres.store') }}" class="space-y-4">
            @include('admin.offres._form')
        </form>
    </x-panel>
</x-layout>
