@props([
    'active' => false,
    'href' => '#',
    ])

<a {{ $attributes->class([
    'nav-link',
    ($active ? 'active' : '')
])->merge([
    'aria-current' => 'page',
    'href' => "{$href}"
]) }}>

    {{ $slot }}

</a>
