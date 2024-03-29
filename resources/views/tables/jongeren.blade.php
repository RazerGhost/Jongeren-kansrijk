<section>
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Jongeren') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Hier kun je alle jongeren vinden.') }}
            </p>
        </header>
    </div>
    <div>
        <x-bladewind.table divider="thin">
            <x-slot name="header">
                <th>Name</th>
                <th>Surname</th>
                <th>Dob</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phonenumber</th>
                <th>Institute</th>
                <th>Acties</th>
            </x-slot>
            @foreach ($Jongeren as $Jongere)
                <tr>
                    <td>{{ __($Jongere->name) }}</td>
                    <td>{{ __($Jongere->surname) }}</td>
                    <td>{{ __($Jongere->dob) }}</td>
                    <td>{{ __($Jongere->address) }}</td>
                    <td>{{ __($Jongere->email) }}</td>
                    <td>{{ __($Jongere->phonenumber) }}</td>
                    <td>{{ __($Jongere->institute) }}</td>
                    <td>
                        <div class="flex flex-row gap-4">
                            <div>
                                @include('jongere.delete-jongere')
                            </div>
                            <div>
                                @include('jongere.edit-jongere')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-bladewind.table>
        <div class="flex flex-row mt-5">
            <div class="flex flex-1"></div>
            <div class="flex flex-row-reverse flex-1">
                @include('jongere.add-jongere')
            </div>
        </div>
    </div>
</section>
