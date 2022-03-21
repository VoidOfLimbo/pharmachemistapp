<x-dashboard-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/piechart.css') }}">
    </x-slot>

    {{-- dashboard header --}}
    <x-slot name="header">
        <h2 class="flex justify-between font-semibold text-xl leading-tight">
            <div>
                {{ __('Dashboard') }}
            </div>

            {{-- controls for user to manage their profiles --}}
            <x-useraccount.accountoptions />

        </h2>
    </x-slot>

    <!-- remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
    <div class="w-full h-screen rounded">
        <div class="md:flex md:flex-col md:p-10 bg-slate-800">
            {{-- Piechart --}}
            <figure class="highcharts-figure">
                <div id="piechart">
                </div>
            </figure>
            {{-- seperator --}}
            <div class="my-20"></div>
            <figure class="highcharts-figure">
                <div id="barchart">
                </div>
            </figure>
            <div class="my-10"></div>
        </div>
    </div>

    {{-- script for passing data from php to javascript --}}
    <script>
        var data = {!! json_encode($carehomes->toArray(), JSON_HEX_TAG) !!};
    </script>

    <x-slot name="script">
        {{-- scripts for including highcharts --}}
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        {{-- script to actually print chart --}}
        <script src="{{ asset('/js/dashboardcharts.js') }}"></script>
    </x-slot>
</x-dashboard-layout>
