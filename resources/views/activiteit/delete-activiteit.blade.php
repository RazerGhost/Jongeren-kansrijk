<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-instituut-deletion-{{ $Activiteit->id }}')"><x-trash-can /></button>
<x-modal name="confirm-instituut-deletion-{{ $Activiteit->id }}" focusable>
    <form method="post" action="{{ route('activiteit.delete', $Activiteit->id) }}" class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Weet je zeker dat je') }} {{ $Activiteit->naam }} {{ __('wilt verwijderen?') }}
        </h2>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Delete Activiteit') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
