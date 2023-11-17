<?php
$InstitutenOptions = [];

foreach ($Institutes as $Institute) {
    $InstitutenOptions[] = [
        'edit-name' => $Institute->name,
        'edit-id' => $Institute->id,
    ];
}
?>
<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-jongere-{{ $Jongere->id }}')"><x-pen /> </button>
<x-modal name="edit-jongere-{{ $Jongere->id }}" focusable>
    <form action="{{ route('jongere.update', $Jongere->id) }}" method="post" class="p-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" value="{{ $Jongere->name }}" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="surname" :value="__('Surname')" />
            <x-text-input id="surname" name="surname" type="text" class="block w-full mt-1" value="{{ $Jongere->surname }}" required autofocus autocomplete="surname" />
            <x-input-error class="mt-2" :messages="$errors->get('surname')" />
        </div>

        <div>
            <x-input-label for="dob" :value="__('Dob')" />
            <x-text-input id="dob" name="dob" type="date" class="block w-full mt-1" value="{{ $Jongere->dob }}" required autofocus autocomplete="dob" />
            <x-input-error class="mt-2" :messages="$errors->get('dob')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" value="{{ $Jongere->address }}" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="phonenumber" :value="__('Phonenumber')" />
            <x-text-input id="phonenumber" name="phonenumber" type="text" class="block w-full mt-1" value="{{ $Jongere->phonenumber }}" required autofocus autocomplete="phonenumber" />
            <x-input-error class="mt-2" :messages="$errors->get('phonenumber')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" value="{{ $Jongere->email }}" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="edit_instituut_{{ $Jongere->id }}" :value="__('Institute')" />
            <x-bladewind.select id="edit_instituut_{{ $Jongere->id }}" name="edit_instituut_{{ $Jongere->id }}"
                searchable="true"
                required="true"
                placeholder="Selecteer het institute"
                label_key="edit-name"
                value_key="edit-id"
            :data="$InstitutenOptions" />
            <x-input-error class="mt-2" :messages="$errors->get('edit_instituut_{{ $Jongere->id }}')" />
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
