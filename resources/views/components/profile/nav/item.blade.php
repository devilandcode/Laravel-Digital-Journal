<li class="nav-item">
    <a {{ $attributes->class([
    'nav-link',
])->merge([
    'href' => '#',
    'aria-current' => "false",
    'class' => ''
]) }}>
        {{ $slot }}
    </a>
</li>
