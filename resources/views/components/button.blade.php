{{-- components/button.blade.php --}}
@props(['href' => null, 'variant' => 'primary'])
@php
    $classes = $variant === 'secondary'
        ? 'inline-flex items-center justify-center rounded-lg border border-green-500 bg-green-600 px-4 py-2 font-semibold
             text-slate-100 hover:bg-green-500'
        : 'inline-flex items-center justify-center rounded-lg border border-orange-400 bg-orange-500 px-4 py-2 font-semibold text-orange-950 hover:bg-orange-400';
@endphp
@if ($href)
    <a href="{{ $href }}" {{ $attributes->class($classes) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->class($classes) }}>{{ $slot }}</button>
@endif
