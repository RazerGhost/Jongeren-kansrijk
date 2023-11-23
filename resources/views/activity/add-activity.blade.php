<?php
$JongereOptions = [
    [
        "add-name-surname" => "test",
        "add-jid" => "9999",
    ],
];

foreach ($Jongeren as $Jongere) {
    $JongereOptions[] = [
        "add-name-surname" => $Jongere->name.' '.$Jongere->surname,
        "add-jid" => $Jongere->id,
    ];
}
?>
<x-primary-button x-on:click.prevent="$dispatch('open-modal', 'Activity')">
    Voeg een Activity toe
</x-primary-button>
<x-modal name="Activity" focusable>
    <form action="{{ route('activity.store') }}" method="post" class="p-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('description')" />
            <x-text-input id="description" name="description" type="text" class="block w-full mt-1" required autofocus autocomplete="description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="date" :value="__('date')" />
            <x-text-input id="date" name="date" type="datetime-local" class="block w-full mt-1" required autofocus autocomplete="date" />
            <x-input-error class="mt-2" :messages="$errors->get('date')" />
        </div>

        <div>
            <x-input-label for="location" :value="__('location')" />
            <x-text-input id="location" name="location" type="text" class="block w-full mt-1" required autofocus autocomplete="location" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        <div>
            <x-input-label for="add_jongeren" :value="__('jongeren')" />
            <x-bladewind.select id="add_jongeren" name="add_jongeren"
                searchable="true"
                required="true"
                multiple="true"
                placeholder="Selecteer de deelmemers"
                label_key="add-name-surname"
                value_key="add-jid"
            :data="$JongereOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('add_jongeren')" />
        </div>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ml-3">
                {{ __('Voeg Activity toe') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
