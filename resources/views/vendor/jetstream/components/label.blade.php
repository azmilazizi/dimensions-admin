@props(['value'])

<label {{ $attributes->merge(['class' => 'label text-gray-400']) }}>
    {{ $value ?? $slot }}
</label>
