<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Activiteten') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Hier kan je alle activiteiten vinden.') }}
        </p>
    </header>
    <x-bladewind.table divider="thin">
        <x-slot name="header">
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Locatie</th>
            <th>Datum</th>
            <th>Jongeren</th>
        </x-slot>
        @foreach ($Activiteiten as $Activiteit)
            <tr>
                <td>{{ __($Activiteit->naam) }}</td>
                <td>{{ __($Activiteit->beschrijving) }}</td>
                <td>{{ __($Activiteit->locatie) }}</td>
                <td>{{ __($Activiteit->datum) }}</td>
                <td>{{ __($Activiteit->jongeren) }}</td>
                <td>
                    <x-bladewind.dropmenu>
                        <x-bladewind.dropmenu-item>
                            Edit
                        </x-bladewind.dropmenu-item>
                        <x-bladewind.dropmenu-item>
                            Invite John to Marketing
                        </x-bladewind.dropmenu-item>
                    </x-bladewind.dropmenu>
                </td>
            </tr>
        @endforeach
    </x-bladewind.table>
</section>
