<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-institute-deletion-{{ $Activity->id }}')"><x-trash-can /></button>
<x-modal name="confirm-institute-deletion-{{ $Activity->id }}" focusable>
    <form method="post" action="{{ route('activity.delete', $Activity->id) }}" class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Weet je zeker dat je') }} {{ $Activity->name }} {{ __('wilt verwijderen?') }}
        </h2>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Delete Activity') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
