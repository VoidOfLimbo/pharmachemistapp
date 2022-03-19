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
        <!-- content goes here -->
        <div>
            <div ></div>
        </div>
    </div>

    {{-- script for passing data from php to javascript --}}
    <script> var data = {!! json_encode($thedata->toArray(), JSON_HEX_TAG) !!}; </script>

    {{-- script to actually print chart --}}
    <script src="{{ asset('/js/piechart.js') }}"></script>

</x-dashboard-layout>
