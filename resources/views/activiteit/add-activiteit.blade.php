<?php
$JongereOptions = [];

foreach ($Jongeren as $Jongere) {
    $JongereOptions[] = [
        'add-voornaam-achternaam' => $Jongere->voornaam.' '.$Jongere->achternaam,
        'add-jid' => $Jongere->id,
    ];
}
?>
<x-primary-button x-on:click.prevent="$dispatch('open-modal', 'Activiteit')">
    Voeg een Activiteit toe
</x-primary-button>
<x-modal name="Activiteit" focusable>
    <form action="{{ route('activiteit.store') }}" method="post" class="p-6">
        @csrf

        <div>
            <x-input-label for="naam" :value="__('naam')" />
            <x-text-input id="naam" name="naam" type="text" class="block w-full mt-1" required autofocus autocomplete="naam" />
            <x-input-error class="mt-2" :messages="$errors->get('naam')" />
        </div>

        <div>
            <x-input-label for="beschrijving" :value="__('beschrijving')" />
            <x-text-input id="beschrijving" name="beschrijving" type="text" class="block w-full mt-1" required autofocus autocomplete="beschrijving" />
            <x-input-error class="mt-2" :messages="$errors->get('beschrijving')" />
        </div>

        <div>
            <x-input-label for="datum" :value="__('datum')" />
            <x-text-input id="datum" name="datum" type="datetime-local" class="block w-full mt-1" required autofocus autocomplete="datum" />
            <x-input-error class="mt-2" :messages="$errors->get('datum')" />
        </div>

        <div>
            <x-input-label for="locatie" :value="__('locatie')" />
            <x-text-input id="locatie" name="locatie" type="text" class="block w-full mt-1" required autofocus autocomplete="locatie" />
            <x-input-error class="mt-2" :messages="$errors->get('locatie')" />
        </div>

        <div>
            <x-input-label for="add_jongeren" :value="__('jongeren')" />
            <x-bladewind.select id="add_jongeren" name="add_jongeren"
                searchable="true"
                required="true"
                multiple="true"
                placeholder="Selecteer de deelmemers"
                label_key="add-voornaam-achternaam"
                value_key="add-jid"
            :data="$JongereOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('add_jongeren')" />
        </div>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ml-3">
                {{ __('Voeg Activiteit toe') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
