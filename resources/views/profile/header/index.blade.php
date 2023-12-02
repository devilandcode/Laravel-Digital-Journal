<x-profile.nav.bar class="bg-dark-subtle">
    <x-profile.nav.item class="active text-dark" href="/username">{{ __('Username') }}</x-profile.nav.item>
    <x-profile.nav.item class="text-dark" href="/post/create">{{ __('Post New Entry') }}</x-profile.nav.item>
    <x-profile.nav.dropdown>
        <x-slot:title>
            <x-profile.nav.droptitle class="text-dark">
                {{ __('More') }}
            </x-profile.nav.droptitle>
        </x-slot:title>
        <x-profile.nav.dropitem>
            {{ __('Archive') }}
        </x-profile.nav.dropitem>
        <x-profile.nav.dropitem>
            {{ __('Edit profile') }}
        </x-profile.nav.dropitem>
        <x-profile.nav.dropitem>
            {{ __('My photos') }}
        </x-profile.nav.dropitem>
    </x-profile.nav.dropdown>
</x-profile.nav.bar>
