@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-regular text-xl text-black']) }}>
    {{ $value ?? $slot }}
</label>
