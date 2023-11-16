<?php
$InstitutenOptions = [];

foreach ($Instituten as $Instituut) {
    $InstitutenOptions[] = [
        'add-naam' => $Instituut->naam,
        'add-id' => $Instituut->id,
    ];
}
?>
<x-primary-button x-on:click.prevent="$dispatch('open-modal', 'Addjongere')">
    Voeg een Jongere toe
</x-primary-button>
<x-modal name="Addjongere" focusable>
    <form action="{{ route('jongere.store') }}" method="post" class="p-6">
        @csrf

        <div>
            <x-input-label for="voornaam" :value="__('voornaam')" />
            <x-text-input id="voornaam" name="voornaam" type="text" class="block w-full mt-1" required autofocus autocomplete="voornaam" />
            <x-input-error class="mt-2" :messages="$errors->get('voornaam')" />
        </div>

        <div>
            <x-input-label for="achternaam" :value="__('achternaam')" />
            <x-text-input id="achternaam" name="achternaam" type="text" class="block w-full mt-1" required autofocus autocomplete="achternaam" />
            <x-input-error class="mt-2" :messages="$errors->get('achternaam')" />
        </div>

        <div>
            <x-input-label for="geboortedatum" :value="__('geboortedatum')" />
            <x-text-input id="geboortedatum" name="geboortedatum" type="date" class="block w-full mt-1" required autofocus autocomplete="geboortedatum" />
            <x-input-error class="mt-2" :messages="$errors->get('geboortedatum')" />
        </div>

        <div>
            <x-input-label for="adres" :value="__('Adres')" />
            <x-text-input id="adres" name="adres" type="text" class="block w-full mt-1" required autofocus autocomplete="adres" />
            <x-input-error class="mt-2" :messages="$errors->get('adres')" />
        </div>

        <div>
            <x-input-label for="telefoonnummer" :value="__('Telefoonnummer')" />
            <x-text-input id="telefoonnummer" name="telefoonnummer" type="text" class="block w-full mt-1" required autofocus autocomplete="telefoonnummer" />
            <x-input-error class="mt-2" :messages="$errors->get('telefoonnummer')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="add_instituut" :value="__('Instituut')" />
            <x-bladewind.select id="add_instituut" name="add_instituut"
                searchable="true"
                required="true"
                label_key="add-naam"
                value_key="add-id"
            :data="$InstitutenOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('add_instituut')" />
        </div>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ml-3">
                {{ __('Voeg Jongere toe') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
