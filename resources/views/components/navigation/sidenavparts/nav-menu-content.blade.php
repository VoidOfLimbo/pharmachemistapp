{{-- Optional Logo --}}
<x-slot name="logo">
    <a href="{{ route('/') }}">
        <div class="h-20 pt-10 w-full flex items-center">
            <x-jet-application-logo class="block h-16 w-auto mx-auto" />
        </div>
    </a>
</x-slot>

{{-- Formatted menu item dashboard --}}
<x-navigation.sidenavparts.nav-menu-item href="{{ route('dashboard') }}" :active="request()->routeIs('/dashboard')">

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

{{-- management dropdown --}}
<x-navigation.sidenavparts.nav-menu-item-collapse id="collapseMenuOne" childid="collapseMenuListOne" parentid="sideNav">

    {{-- title for dropdown --}}
    <x-slot name="title">
        {{ __('Management Tasks') }}
    </x-slot>

    {{-- carehome CRUD --}}
    @can('viewAny', App\Models\Carehome::class)
        <x-navigation.sidenavparts.nav-menu-item href="{{ route('carehomes.index') }}"
            :active="request()->routeIs('/carehomes.*')">
            <x-slot name="svgpath">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </x-slot>
            {{ __('Carehome Management') }}

        </x-navigation.sidenavparts.nav-menu-item>
    @else
        <x-navigation.sidenavparts.nav-menu-item>
            {{ __('Access Denied') }}
        </x-navigation.sidenavparts.nav-menu-item>
    @endcan

    {{-- user CRUD --}}
    @can('viewAny', App\Models\User::class)
        <x-navigation.sidenavparts.nav-menu-item href="{{ route('users.index') }}"
            :active="request()->routeIs('/users.*')">
            <x-slot name="svgpath">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </x-slot>
            {{ __('User Management') }}

        </x-navigation.sidenavparts.nav-menu-item>
    @else
        <x-navigation.sidenavparts.nav-menu-item>
            {{ __('Access Denied') }}
        </x-navigation.sidenavparts.nav-menu-item>
    @endcan
</x-navigation.sidenavparts.nav-menu-item-collapse>

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
