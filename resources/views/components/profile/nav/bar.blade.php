<ul {{ $attributes->class([
    'nav nav-tabs'
])->merge([
    'class' => ''
])}}>
    {{ $slot }}
</ul>
