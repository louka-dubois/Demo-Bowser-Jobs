{{-- components/form/input.blade.php --}}
@props(['name', 'value' => ''])
<input id="{{ $name }}" name="{{ $name }}" value="{{ $value }}"
       {{ $attributes->class('w-full rounded-lg border border-slate-900 bg-slate-950 text-slate-300 px-3 py-2 shadow-sm focus:border-
           blue-700 focus:outline-none focus:ring-2 focus:ring-blue-100') }}>
