<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <x-bladewind.tab-group name="tables">

                    <x-slot name="headings">
                        <x-bladewind.tab-heading name="Activiteiten" active="true" label="Activiteiten" />

                        <x-bladewind.tab-heading name="Instituten" label="Instituten" />

                        <x-bladewind.tab-heading name="Jongeren" label="Jongeren" />

                    </x-slot>

                    <x-bladewind.tab-body>

                        <x-bladewind.tab-content name="Activiteiten" active="true">
                            @include('tables.activiteiten')
                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="Instituten">
                            @include('tables.instituten')
                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="Jongeren">
                            @include('tables.jongeren')
                        </x-bladewind.tab-content>

                    </x-bladewind.tab-body>

                </x-bladewind.tab-group>
            </div>
        </div>
    </div>
</x-app-layout>
