{{-- components/simple-badge.blade.php --}}
@props(['danger' => false])

<span {{ $attributes->class([
    'inline-flex rounded-full px-2 py-1 text-xs font-semibold',
    'bg-green-500/20 text-green-400' => !$danger,
    'bg-orange-500/20 text-orange-400' => $danger,
]) }}>
    {{ $slot }}
</span>