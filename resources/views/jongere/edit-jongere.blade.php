<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-instituut-{{ $Instituut->id }}')"><x-pen /> </button>
<x-modal name="edit-instituut-{{ $Instituut->id }}" focusable>
    <form action="{{ route('instituut.update', $Instituut->id) }}" method="post" class="p-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="naam" :value="__('Naam')" />
            <x-text-input id="naam" name="naam" type="text" class="block w-full mt-1" value="{{ $Instituut->naam }}" required autofocus autocomplete="naam" />
            <x-input-error class="mt-2" :messages="$errors->get('naam')" />
        </div>

        <div>
            <x-input-label for="beschrijving" :value="__('Beschrijving')" />
            <x-text-input id="beschrijving" name="beschrijving" type="text" class="block w-full mt-1" value="{{ $Instituut->beschrijving }}" required autofocus autocomplete="beschrijving" />
            <x-input-error class="mt-2" :messages="$errors->get('beschrijving')" />
        </div>

        <div>
            <x-input-label for="adres" :value="__('Adres')" />
            <x-text-input id="adres" name="adres" type="text" class="block w-full mt-1" value="{{ $Instituut->adres }}" required autofocus autocomplete="adres" />
            <x-input-error class="mt-2" :messages="$errors->get('adres')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" value="{{ $Instituut->email }}" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="telefoonnummer" :value="__('Telefoonnummer')" />
            <x-text-input id="telefoonnummer" name="telefoonnummer" type="text" class="block w-full mt-1" value="{{ $Instituut->telefoonnummer }}" required autofocus autocomplete="telefoonnummer" />
            <x-input-error class="mt-2" :messages="$errors->get('telefoonnummer')" />
        </div>
        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Edit Jongere') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
