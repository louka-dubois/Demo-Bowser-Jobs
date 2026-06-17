{{-- edit.blade.php --}}
<x-layout :title="'Modifier - ' . $offreEmploi->titre">
    <x-page-header eyebrow="Administration" :title="'Modifier - ' . $offreEmploi->titre" />
    <x-panel class="max-w-3xl">
        <form method="POST" action="{{ route('admin.offres.update', $offreEmploi) }}" class="space-y-4">
            @method('PUT')
            @include('admin.offres._form')
        </form>
    </x-panel>
</x-layout>
