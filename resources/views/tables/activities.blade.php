<section>
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Activities') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Hier kan je alle activities vinden.') }}
            </p>
        </header>
    </div>
    <div>
        <x-bladewind.table divider="thin">
            <x-slot name="header">
                <th>Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Jongeren</th>
                <th>Acties</th>
            </x-slot>
            @foreach ($Activities as $Activity)
                <tr>
                    <td>{{ __($Activity->name) }}</td>
                    <td>{{ __($Activity->description) }}</td>
                    <td>{{ __($Activity->location) }}</td>
                    <td>{{ __($Activity->date) }}</td>
                    <td>{{ __($Activity->jongeren) }}</td>
                    <td>
                        <div class="flex flex-row gap-4">
                            <div>
                                @include('activity.delete-activity')
                            </div>
                            <div>
                                @include('activity.edit-activity')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-bladewind.table>
        <div class="flex flex-row mt-5">
            <div class="flex flex-1"></div>
            <div class="flex flex-row-reverse flex-1">
                @include('activity.add-activity')
            </div>
        </div>
    </div>
</section>
