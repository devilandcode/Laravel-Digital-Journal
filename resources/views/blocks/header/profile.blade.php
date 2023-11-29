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
                <x-nav.linkbtn class="btn btn-primary" href="{{ route('post.create') }}">
                    {{ __('Post') }}
                </x-nav.linkbtn>
            </x-nav.item>
            <x-nav.item>
                <x-nav.link>
                    {{ __('Username') }}
                </x-nav.link>
            </x-nav.item>
        </x-nav.bar>
    </x-nav>
</header>


