<section>
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Activiteten') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Hier kan je alle activiteiten vinden.') }}
            </p>
        </header>
    </div>
    <div>
        <x-bladewind.table divider="thin">
            <x-slot name="header">
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Locatie</th>
                <th>Datum</th>
                <th>Jongeren</th>
                <th>Acties</th>
            </x-slot>
            @foreach ($Activiteiten as $Activiteit)
                <tr>
                    <td>{{ __($Activiteit->naam) }}</td>
                    <td>{{ __($Activiteit->beschrijving) }}</td>
                    <td>{{ __($Activiteit->locatie) }}</td>
                    <td>{{ __($Activiteit->datum) }}</td>
                    <td>{{ __($Activiteit->jongeren) }}</td>
                    <td>
                        <div class="flex flex-row gap-4">
                            <div>
                                @include('activiteit.delete-activiteit')
                            </div>
                            <div>
                                @include('activiteit.edit-activiteit')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-bladewind.table>
        <div class="flex flex-row mt-5">
            <div class="flex flex-1"></div>
            <div class="flex flex-row-reverse flex-1">
                @include('activiteit.add-activiteit')
            </div>
        </div>
    </div>
</section>
