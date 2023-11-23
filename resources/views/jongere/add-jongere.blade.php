<?php
$InstitutenOptions = [
    [
        "add-name" => "test",
        "add-id" => "99999",
    ],
];

foreach ($Institutes as $Institute) {
    $InstitutenOptions[] = [
        "add-name" => $Institute->name,
        "add-id" => $Institute->id,
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
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="surname" :value="__('surname')" />
            <x-text-input id="surname" name="surname" type="text" class="block w-full mt-1" required autofocus autocomplete="surname" />
            <x-input-error class="mt-2" :messages="$errors->get('surname')" />
        </div>

        <div>
            <x-input-label for="dob" :value="__('dob')" />
            <x-text-input id="dob" name="dob" type="date" class="block w-full mt-1" required autofocus autocomplete="dob" />
            <x-input-error class="mt-2" :messages="$errors->get('dob')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="phonenumber" :value="__('Phonenumber')" />
            <x-text-input id="phonenumber" name="phonenumber" type="text" class="block w-full mt-1" required autofocus autocomplete="phonenumber" />
            <x-input-error class="mt-2" :messages="$errors->get('phonenumber')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="add_instituut" :value="__('Institute')" />
            <x-bladewind.select id="add_instituut" name="add_instituut"
                searchable="true"
                required="true"
                placeholder="Selecteer het institute"
                label_key="add-name"
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
