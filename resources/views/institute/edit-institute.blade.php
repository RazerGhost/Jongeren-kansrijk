<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-institute-{{ $Institute->id }}')"><x-pen /> </button>
<x-modal name="edit-institute-{{ $Institute->id }}" focusable>
    <form action="{{ route('institute.update', $Institute->id) }}" method="post" class="p-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" value="{{ $Institute->name }}" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="block w-full mt-1" value="{{ $Institute->description }}" required autofocus autocomplete="description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" value="{{ $Institute->address }}" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" value="{{ $Institute->email }}" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="phonenumber" :value="__('Phonenumber')" />
            <x-text-input id="phonenumber" name="phonenumber" type="text" class="block w-full mt-1" value="{{ $Institute->phonenumber }}" required autofocus autocomplete="phonenumber" />
            <x-input-error class="mt-2" :messages="$errors->get('phonenumber')" />
        </div>
        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Edit Institute') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
