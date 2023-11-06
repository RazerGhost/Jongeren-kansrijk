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
                <div class="flex flex-row gap-4">
                    <div>
                        <form action="{{ route('instituut.delete', $Instituut->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><x-trash-can /></button>
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('instituut.edit', $Instituut->id) }}">
                            <x-pen />
                        </a>
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
</section>
