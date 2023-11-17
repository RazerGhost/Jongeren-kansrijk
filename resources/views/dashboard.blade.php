<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Display status alerts --}}
    @if (session('status') === 'added')
        <x-bladewind.alert type="success">
            Data was successfully saved!
        </x-bladewind.alert>
    @elseif (session('status') === 'edited')
        <x-bladewind.alert type="info">
            Data was successfully edited!
        </x-bladewind.alert>
    @elseif (session('status') === 'deleted')
        <x-bladewind.alert type="error">
            Data was successfully deleted!
        </x-bladewind.alert>
    @elseif (session('status') === 'error')
        <x-bladewind.alert type="error">
            Something went wrong!
        </x-bladewind.alert>
    @endif

    {{-- Main content --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

                {{-- Statistics Section --}}
                <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 lg:grid-cols-3">
                    <x-bladewind::statistic number="{{ $JongCount }}" label="Totaal aantal jongeren">

                        <x-slot name="icon">
                            <svg class="w-16 h-16 p-2 text-white bg-blue-500 rounded-full">
                                <x-bladewind.icon name="user" class="dark:text-white" />
                            </svg>
                        </x-slot>

                    </x-bladewind::statistic>
                    <x-bladewind::statistic number="{{ $ActCount }}" label="Totaal aantal activities">

                        <x-slot name="icon">
                            <svg class="w-16 h-16 p-2 text-white bg-blue-500 rounded-full">
                                <x-bladewind.icon name="user-group" class="dark:text-white" />
                            </svg>
                        </x-slot>

                    </x-bladewind::statistic>
                    <x-bladewind::statistic number="{{ $InstCount }}" label="Totaal aantal institutes">

                        <x-slot name="icon">
                            <svg class="w-16 h-16 p-2 text-white bg-blue-500 rounded-full">
                                <x-bladewind.icon name="building-office" class="dark:text-white" />
                            </svg>
                        </x-slot>

                    </x-bladewind::statistic>
                </div>

                {{-- Tab Group Section --}}
                <x-bladewind.tab-group name="tables">
                    <x-slot name="headings">
                        <x-bladewind.tab-heading name="Jongeren" active="true" label="Jongeren" />
                        <x-bladewind.tab-heading name="Activities" label="Activities" />
                        <x-bladewind.tab-heading name="Institutes" label="Institutes" />
                    </x-slot>

                    <x-bladewind.tab-body>
                        {{-- Tab Content for Jongeren --}}
                        <x-bladewind.tab-content name="Jongeren" active="true">
                            @include('tables.jongeren')
                        </x-bladewind.tab-content>

                        {{-- Tab Content for activities --}}
                        <x-bladewind.tab-content name="Activities">
                            @include('tables.activities')
                        </x-bladewind.tab-content>

                        {{-- Tab Content for Institutes --}}
                        <x-bladewind.tab-content name="Institutes">
                            @include('tables.institutes')
                        </x-bladewind.tab-content>
                    </x-bladewind.tab-body>
                </x-bladewind.tab-group>

            </div>
        </div>
    </div>
</x-app-layout>
