@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-regular text-xl text-black pt-3']) }}>
    {{ $value ?? $slot }}
</label>
