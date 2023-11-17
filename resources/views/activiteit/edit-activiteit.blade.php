<?php
$JongereOptions = [];

foreach ($Jongeren as $Jongere) {
    $JongereOptions[] = [
        'edit-voornaam-achternaam' => $Jongere->voornaam.' '.$Jongere->achternaam,
        'edit-jid' => $Jongere->id,
    ];
}
?>
<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-Activiteit-{{ $Activiteit->id }}')"><x-pen /> </button>
<x-modal name="edit-Activiteit-{{ $Activiteit->id }}" focusable>
    <form action="{{ route('activiteit.update', $Activiteit->id) }}" method="post" class="p-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="naam" :value="__('Naam')" />
            <x-text-input id="naam" name="naam" type="text" class="block w-full mt-1" value="{{ $Activiteit->naam }}" required autofocus autocomplete="naam" />
            <x-input-error class="mt-2" :messages="$errors->get('naam')" />
        </div>

        <div>
            <x-input-label for="beschrijving" :value="__('Beschrijving')" />
            <x-text-input id="beschrijving" name="beschrijving" type="text" class="block w-full mt-1" value="{{ $Activiteit->beschrijving }}" required autofocus autocomplete="beschrijving" />
            <x-input-error class="mt-2" :messages="$errors->get('beschrijving')" />
        </div>

        <div>
            <x-input-label for="datum" :value="__('Datum')" />
            <x-text-input id="datum" name="datum" type="datetime-local" class="block w-full mt-1" value="{{ $Activiteit->datum }}" required autofocus autocomplete="datum" />
            <x-input-error class="mt-2" :messages="$errors->get('datum')" />
        </div>

        <div>
            <x-input-label for="locatie" :value="__('Locatie')" />
            <x-text-input id="locatie" name="locatie" type="text" class="block w-full mt-1" value="{{ $Activiteit->locatie }}" required autofocus autocomplete="locatie" />
            <x-input-error class="mt-2" :messages="$errors->get('locatie')" />
        </div>

        <div>
            <x-input-label for="edit_jongere_{{ $Activiteit->id }}" :value="__('Jongere')" />
            <x-bladewind.select id="edit_jongeren_{{ $Activiteit->id }}" name="edit_jongeren_{{ $Activiteit->id }}"
                searchable="true"
                required="true"
                multiple="true"
                placeholder="Selecteer opnieuw de deelmemers"
                label_key="edit-voornaam-achternaam"
                value_key="edit-jid"
            :data="$JongereOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('edit_Jongeren_{{ $Activiteit->id }}')" />
        </div>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ml-3">
                {{ __('Edit Jongere') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
