{{-- components/badge.blade.php --}}
@props(['variant' => 'info'])
<span {{ $attributes->class('inline-flex rounded-full bg-orange-500/20 px-2 py-1 text-xs font-semibold text-yellow-400') }}>
    {{ $slot }}
    <img
        src="https://mario.wiki.gallery/images/6/64/SMAS-Coin.png"
        alt="Coin"
        class="h-4 w-5"
    >
</span>
