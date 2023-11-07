<section>
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Instituten') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Hier kan je alle instituten vinden.') }}
            </p>
        </header>
    </div>
    <div>
        <x-bladewind.table divider="thin">
            <x-slot name="header">
                <th></th>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Adres</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Acties</th>
            </x-slot>
            @foreach ($Instituten as $Instituut)
                <tr>
                    <td>{{ __($Instituut->id) }}</td>
                    <td>{{ __($Instituut->naam) }}</td>
                    <td>{{ __($Instituut->beschrijving) }}</td>
                    <td>{{ __($Instituut->adres) }}</td>
                    <td>{{ __($Instituut->email) }}</td>
                    <td>{{ __($Instituut->telefoonnummer) }}</td>
                    <td>
                        <div class="flex flex-row gap-4">
                            <div>
                                @include('instituut.delete-instituut')
                            </div>
                            <div>
                                @include('instituut.edit-instituut')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-bladewind.table>
        <div class="flex flex-row mt-5">
            <div class="flex flex-1"></div>
            <div class="flex flex-row-reverse flex-1">
                @include('instituut.add-instituut')
            </div>
        </div>
    </div>
</section>
