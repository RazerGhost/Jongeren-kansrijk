<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Instituten') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Hier kan je alle instituten vinden.') }}
        </p>
    </header>
    <x-bladewind.table divider="thin">
        <x-slot name="header">
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Adres</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
            <th>Acties</th>
        </x-slot>
        @foreach ($Instituten as $Instituut)
            <tr>
                <td>{{ __($Instituut->naam) }}</td>
                <td>{{ __($Instituut->beschrijving) }}</td>
                <td>{{ __($Instituut->adres) }}</td>
                <td>{{ __($Instituut->email) }}</td>
                <td>{{ __($Instituut->telefoonnummer) }}</td>
                <td>
                    <a onclick="showModal('delete')">
                        <x-trash-can />
                    </a>
                    <x-bladewind.modal name="delete">
                        Please agree to the terms dwAD conditions of
                        the agreement before proceeding.
                    </x-bladewind.modal>
                    <a onclick="showModal('edit')">
                        <x-pen />
                    </a>
                    <x-bladewind.modal name="edit">
                        Please agree to the terms and conditions of
                        the agreement before proceeding.
                    </x-bladewind.modal>
                </td>
            </tr>
        @endforeach
    </x-bladewind.table>
    <div class="flex flex-row mt-5">
        <div class="flex flex-1"></div>
        <div class="flex flex-row-reverse flex-1">
            @include('instituut.Addinstituut')
        </div>
    </div>
</section>
