@props([
    'type' => 'submit',
    'label',
    'isDisabled' => false,
    'class' => '',
])

<button {{ $attributes->merge(['type' => $type, 'class' => "btn {$class}", 'disabled' => $isDisabled]) }}>
    {{ $label }}
</button>
