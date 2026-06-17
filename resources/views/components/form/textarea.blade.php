{{-- components/form/textarea.blade.php --}}
@props(['name'])
<textarea id="{{ $name }}" name="{{ $name }}"
          {{ $attributes->class('min-h-32 w-full resize-y rounded-lg border border-slate-900 bg-slate-950 text-slate-300 px-3 py-2 
              shadow-sm focus:border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-100') }}>{{ $slot 
              }}</textarea>
