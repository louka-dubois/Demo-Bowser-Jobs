{{-- components/alert.blade.php --}}
@if (session('success'))
    <div class="mb-4 rounded-lg border border-slate-800/75 bg-slate-900/75 px-4 py-3 font-medium text-green-700 shadow-sm">
        {{ session('success') }}
    </div>
@endif
