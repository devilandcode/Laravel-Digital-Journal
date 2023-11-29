<header>
    <x-nav>
        <x-nav.bar>
            <x-nav.item>
                <x-nav.link href="/" active>
                    {{ __('Home') }}
                </x-nav.link>
            </x-nav.item>
            <x-nav.item>
                <x-nav.link>
                    {{ __('Top') }}
                </x-nav.link>
            </x-nav.item>
            <x-nav.item>
                <x-nav.link>
                    {{ __('Interesting') }}
                </x-nav.link>
            </x-nav.item>
        </x-nav.bar>
        <x-nav.bar>
            <x-nav.item>
                <x-nav.link href="/register">
                    {{ __('Register') }}
                </x-nav.link>
            </x-nav.item>
        </x-nav.bar>
    </x-nav>
</header>
