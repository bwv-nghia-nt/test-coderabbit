@props(['label' => null, 'isRequired' => false])

@php
    $classes = $attributes->get('class', '');
    $classes = trim("{$classes} form-label");
    $classes = $isRequired ? "{$classes} required" : $classes;
@endphp

<label {{ $attributes->merge(['class' => $classes]) }}>
    {{ $label }}
    {{ $slot }}
</label>
