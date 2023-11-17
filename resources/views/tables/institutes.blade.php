<section>
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Institutes') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Hier kan je alle institutes vinden.') }}
            </p>
        </header>
    </div>
    <div>
        <x-bladewind.table divider="thin">
            <x-slot name="header">
                <th></th>
                <th>Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phonenumber</th>
                <th>Acties</th>
            </x-slot>
            @foreach ($Institutes as $Institute)
                <tr>
                    <td>{{ __($Institute->id) }}</td>
                    <td>{{ __($Institute->name) }}</td>
                    <td>{{ __($Institute->description) }}</td>
                    <td>{{ __($Institute->address) }}</td>
                    <td>{{ __($Institute->email) }}</td>
                    <td>{{ __($Institute->phonenumber) }}</td>
                    <td>
                        <div class="flex flex-row gap-4">
                            <div>
                                @include('institute.delete-institute')
                            </div>
                            <div>
                                @include('institute.edit-institute')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-bladewind.table>
        <div class="flex flex-row mt-5">
            <div class="flex flex-1"></div>
            <div class="flex flex-row-reverse flex-1">
                @include('institute.add-institute')
            </div>
        </div>
    </div>
</section>
