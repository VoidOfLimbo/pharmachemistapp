{{-- Optional Logo --}}
<x-slot name="logo">
    <a href="{{ route('/') }}">
        <div class="h-20 pt-10 w-full flex items-center">
            <x-jet-application-logo class="block h-16 w-auto mx-auto" />
        </div>
    </a>
</x-slot>

{{-- Formatted menu item dashboard --}}
<x-navigation.sidenavparts.nav-menu-item href="{{ route('/') }}" :active="request()->routeIs('/')">

    {{-- path for dashboard svg --}}
    <x-slot name="svgpath">
        <path stroke="none" d="M0 0h24v24H0z"></path>
        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
        <rect x="14" y="14" width="6" height="6" rx="1"></rect>
    </x-slot>

    {{-- corresponding text --}}
    {{ __('Dashboard') }}

    {{-- !!! | make it dynamic later | !!! --}}
    <x-slot name="changes"> 5 </x-slot>
</x-navigation.sidenavparts.nav-menu-item>

{{-- Formatted menu item profile --}}
<x-navigation.sidenavparts.nav-menu-item href="{{ route('profile.show') }}">

    {{-- path for profile svg --}}
    <x-slot name="svgpath">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
        </path>
    </x-slot>

    {{-- corresponding text --}}
    {{ __('Profile') }}
</x-navigation.sidenavparts.nav-menu-item>
