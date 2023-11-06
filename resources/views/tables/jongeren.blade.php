<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Jongeren') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Hier kun je alle jongeren vinden.') }}
        </p>
    </header>
    <x-bladewind.table divider="thin">
        <x-slot name="header">
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Geboortedatum</th>
            <th>Adres</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
            <th>Instituut</th>
        </x-slot>
        @foreach ($Jongeren as $Instituut)
            <tr>
                <td>{{ __($Instituut->voornaam) }}</td>
                <td>{{ __($Instituut->achternaam) }}</td>
                <td>{{ __($Instituut->geboortedatum) }}</td>
                <td>{{ __($Instituut->adres) }}</td>
                <td>{{ __($Instituut->email) }}</td>
                <td>{{ __($Instituut->telefoonnummer) }}</td>
                <td>{{ __($Instituut->instituut) }}</td>
            </tr>
        @endforeach
    </x-bladewind.table>
</section>
