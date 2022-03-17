<x-dashboard-layout>

    {{-- dashboard header --}}
    <x-slot name="header">
        <h2 class="flex justify-between font-semibold text-xl text-gray-800 leading-tight">
            <div>
                {{ __('Dashboard') }}
            </div>

            {{-- controls for user to manage their profiles --}}
            <x-useraccount.accountoptions />

        </h2>
    </x-slot>

    <!-- remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
    <div class="w-full h-screen rounded border-dashed border-2 border-gray-300">
        <!-- Place your content here -->
        Something
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div> --}}
</x-dashboard-layout>
