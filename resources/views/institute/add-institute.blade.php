<x-primary-button x-on:click.prevent="$dispatch('open-modal', 'Addinstituut')">
    Voeg institute toe
</x-primary-button>
<x-modal name="Addinstituut" focusable>
    <form action="{{ route('institute.store') }}" method="post" class="p-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="block w-full mt-1" required autofocus autocomplete="description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="phonenumber" :value="__('Phonenumber')" />
            <x-text-input id="phonenumber" name="phonenumber" type="text" class="block w-full mt-1" required autofocus autocomplete="phonenumber" />
            <x-input-error class="mt-2" :messages="$errors->get('phonenumber')" />
        </div>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ml-3">
                {{ __('Add Institute') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
