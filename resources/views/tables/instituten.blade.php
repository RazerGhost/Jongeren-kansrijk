<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Instituten') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Hier kan je alle instituten vinden.') }}
        </p>
    </header>
    @include('instituut.Addinstituut')
    <x-bladewind.notification />
    <x-bladewind.table divider="thin">
        <x-slot name="header">
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Adres</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
        </x-slot>
        @foreach ($Instituten as $Instituut)
            <tr>
                <td>{{ __($Instituut->naam) }}</td>
                <td>{{ __($Instituut->beschrijving) }}</td>
                <td>{{ __($Instituut->adres) }}</td>
                <td>{{ __($Instituut->email) }}</td>
                <td>{{ __($Instituut->telefoonnummer) }}</td>
            </tr>
        @endforeach
    </x-bladewind.table>
</section>
