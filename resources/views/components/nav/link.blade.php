@props([
    'active' => false,
    ])

<a {{ $attributes->class([
    'nav-link',
    ($active ? 'active' : '')
])->merge([
    'aria-current' => 'page',
    'href' => '#'
]) }}>

    {{ $slot }}

</a>
