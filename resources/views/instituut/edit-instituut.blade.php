<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <form action="{{ route('instituut.update', $Instituut->id) }}" method="post" class="Submit_Institute_Edit">
                    @csrf
                    @method('patch')
                    <div>
                        <x-input-label for="naam" :value="__('Naam')" />
                        <x-text-input id="naam" name="naam" type="text" class="block w-full mt-1" placeholder="{{ $Instituut->naam }}" required autofocus autocomplete="naam" />
                        <x-input-error class="mt-2" :messages="$errors->get('naam')" />
                    </div>

                    <div>
                        <x-input-label for="beschrijving" :value="__('Beschrijving')" />
                        <x-text-input id="beschrijving" name="beschrijving" type="text" class="block w-full mt-1" placeholder="{{ $Instituut->beschrijving }}" required autofocus autocomplete="beschrijving" />
                        <x-input-error class="mt-2" :messages="$errors->get('beschrijving')" />
                    </div>

                    <div>
                        <x-input-label for="adres" :value="__('Adres')" />
                        <x-text-input id="adres" name="adres" type="text" class="block w-full mt-1" placeholder="{{ $Instituut->adres }}" required autofocus autocomplete="adres" />
                        <x-input-error class="mt-2" :messages="$errors->get('adres')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="block w-full mt-1" placeholder="{{ $Instituut->email }}" required autofocus autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div>
                        <x-input-label for="telefoonnummer" :value="__('Telefoonnummer')" />
                        <x-text-input id="telefoonnummer" name="telefoonnummer" type="text" class="block w-full mt-1" placeholder="{{ $Instituut->telefoonnummer }}" required autofocus autocomplete="telefoonnummer" />
                        <x-input-error class="mt-2" :messages="$errors->get('telefoonnummer')" />
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">{{ __('Veranderingen Toepassen') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
