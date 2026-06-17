@props(['href' => '#', 'active' => false])
 
<a href="{{ $href }}"
   {{ $attributes->class([
        'rounded-lg px-3 py-2 text-sm font-semibold text-white transition hover:bg-orange-900/50',
        'bg-green-900/50' => $active,
   ]) }}>
    {{ $slot }}
</a>
