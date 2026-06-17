{{-- components/form/field.blade.php --}}
@props(['name', 'label'])
<div class="space-y-1">
    <label for="{{ $name }}" class="block text-sm font-semibold text-orange-500">{{ $label }}</label>
    {{ $slot }}
    @error($name)
        <p class="text-sm text-red-700">{{ $message }}</p>
    @enderror
</div>
