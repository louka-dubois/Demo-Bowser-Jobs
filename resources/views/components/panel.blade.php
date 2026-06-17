{{-- components/panel.blade.php --}}
<div {{ $attributes->class('rounded-[14px] border border-slate-800/75 bg-slate-900/75 p-5 shadow-[0_10px_28px_rgba(15,23,42,0.08)]') }}>
    {{ $slot }}
</div>
 
{{-- components/page-header.blade.php --}}
@props(['eyebrow' => null, 'title', 'description' => null])
<div class="mb-5">
    @if ($eyebrow)
        <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">{{ $eyebrow }}</p>
    @endif
    <h1 class="mt-1 text-3xl font-bold text-slate-900"></h1>
    @if ($description)
        <p class="mt-2 max-w-3xl text-slate-200">{{ $description }}</p>
    @endif
</div>
 