<x-bladewind.button size="small" onclick="showModal('Addinstituut')">
    Voeg instituut toe
</x-bladewind.button>
<x-bladewind.modal name="Addinstituut" title="Instituut aan het toevoegen" ok_button_label="Voeg toe" ok_button_action="storeinstitute()">

    <form action="{{ route('instituut.store') }}" method="post" class="storeinstitute">
        @csrf

        <div>
            <x-input-label for="naam" :value="__('Naam')" />
            <x-text-input id="naam" name="naam" type="text" class="block w-full mt-1" required autofocus autocomplete="naam" />
            <x-input-error class="mt-2" :messages="$errors->get('naam')" />
        </div>

        <div>
            <x-input-label for="beschrijving" :value="__('Beschrijving')" />
            <x-text-input id="beschrijving" name="beschrijving" type="text" class="block w-full mt-1" required autofocus autocomplete="beschrijving" />
            <x-input-error class="mt-2" :messages="$errors->get('beschrijving')" />
        </div>

        <div>
            <x-input-label for="adres" :value="__('Adres')" />
            <x-text-input id="adres" name="adres" type="text" class="block w-full mt-1" required autofocus autocomplete="adres" />
            <x-input-error class="mt-2" :messages="$errors->get('adres')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="telefoonnummer" :value="__('Telefoonnummer')" />
            <x-text-input id="telefoonnummer" name="telefoonnummer" type="text" class="block w-full mt-1" required autofocus autocomplete="telefoonnummer" />
            <x-input-error class="mt-2" :messages="$errors->get('telefoonnummer')" />
        </div>
    </form>
</x-bladewind.modal>

<script>
    storeinstitute = () => {
        if (validateForm('.storeinstitute')) {
            domEl('.storeinstitute').submit();
        } else {
            return false;
        }
    }
</script>
