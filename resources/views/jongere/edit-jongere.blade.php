<?php
$InstitutenOptions = [];

foreach ($Instituten as $Instituut) {
    $InstitutenOptions[] = [
        'naam' => $Instituut->naam,
        'id' => $Instituut->id,
    ];
}
?>
<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-jongere-{{ $Jongere->id }}')"><x-pen /> </button>
<x-modal name="edit-jongere-{{ $Jongere->id }}" focusable>
    <form action="{{ route('jongere.update', $Jongere->id) }}" method="post" class="p-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="voornaam" :value="__('Voornaam')" />
            <x-text-input id="voornaam" name="voornaam" type="text" class="block w-full mt-1" value="{{ $Jongere->voornaam }}" required autofocus autocomplete="voornaam" />
            <x-input-error class="mt-2" :messages="$errors->get('voornaam')" />
        </div>

        <div>
            <x-input-label for="achternaam" :value="__('Achternaam')" />
            <x-text-input id="achternaam" name="achternaam" type="text" class="block w-full mt-1" value="{{ $Jongere->achternaam }}" required autofocus autocomplete="achternaam" />
            <x-input-error class="mt-2" :messages="$errors->get('achternaam')" />
        </div>

        <div>
            <x-input-label for="geboortedatum" :value="__('Geboortedatum')" />
            <x-text-input id="geboortedatum" name="geboortedatum" type="date" class="block w-full mt-1" value="{{ $Jongere->geboortedatum }}" required autofocus autocomplete="geboortedatum" />
            <x-input-error class="mt-2" :messages="$errors->get('geboortedatum')" />
        </div>

        <div>
            <x-input-label for="adres" :value="__('Adres')" />
            <x-text-input id="adres" name="adres" type="text" class="block w-full mt-1" value="{{ $Jongere->adres }}" required autofocus autocomplete="adres" />
            <x-input-error class="mt-2" :messages="$errors->get('adres')" />
        </div>

        <div>
            <x-input-label for="telefoonnummer" :value="__('Telefoonnummer')" />
            <x-text-input id="telefoonnummer" name="telefoonnummer" type="text" class="block w-full mt-1" value="{{ $Jongere->telefoonnummer }}" required autofocus autocomplete="telefoonnummer" />
            <x-input-error class="mt-2" :messages="$errors->get('telefoonnummer')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" value="{{ $Jongere->email }}" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="instituut" :value="__('Instituut')" />
            <x-bladewind.select name="instituut"
                searchable="true"
                required="true"
                label_key="naam"
                value_key="id"
            :data="$InstitutenOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('instituut')" />
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
