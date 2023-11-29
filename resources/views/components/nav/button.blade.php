@props(['second' => 'btn-primary', 'type' => 'button'])

<button {{ $attributes->class([
    'btn', "{$second}"
])->merge([
    'type' => "{$type}"
]) }}>
    {{ $slot }}
</button>
