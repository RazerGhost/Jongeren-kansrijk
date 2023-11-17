<?php
$JongereOptions = [];

foreach ($Jongeren as $Jongere) {
    $JongereOptions[] = [
        'edit-name-surname' => $Jongere->name.' '.$Jongere->surname,
        'edit-jid' => $Jongere->id,
    ];
}
?>
<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-Activity-{{ $Activity->id }}')"><x-pen /> </button>
<x-modal name="edit-Activity-{{ $Activity->id }}" focusable>
    <form action="{{ route('activity.update', $Activity->id) }}" method="post" class="p-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" value="{{ $Activity->name }}" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="block w-full mt-1" value="{{ $Activity->description }}" required autofocus autocomplete="description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="date" :value="__('Date')" />
            <x-text-input id="date" name="date" type="datetime-local" class="block w-full mt-1" value="{{ $Activity->date }}" required autofocus autocomplete="date" />
            <x-input-error class="mt-2" :messages="$errors->get('date')" />
        </div>

        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" class="block w-full mt-1" value="{{ $Activity->location }}" required autofocus autocomplete="location" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        <div>
            <x-input-label for="edit_jongere_{{ $Activity->id }}" :value="__('Jongere')" />
            <x-bladewind.select id="edit_jongeren_{{ $Activity->id }}" name="edit_jongeren_{{ $Activity->id }}"
                searchable="true"
                required="true"
                multiple="true"
                placeholder="Selecteer opnieuw de deelmemers"
                label_key="edit-name-surname"
                value_key="edit-jid"
            :data="$JongereOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('edit_Jongeren_{{ $Activity->id }}')" />
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
