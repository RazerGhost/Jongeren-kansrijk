<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-institute-deletion-{{ $Institute->id }}')"><x-trash-can /></button>
<x-modal name="confirm-institute-deletion-{{ $Institute->id }}" focusable>
    <form method="post" action="{{ route('institute.delete', $Institute->id) }}" class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Weet je zeker dat je') }} {{ $Institute->name }} {{ __('wilt verwijderen?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Als je dit institute verwijderd, worden alle jongeren die hierbij horen ook verwijderd.') }}
        </p>

        <div class="flex justify-end mt-6">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Delete Institute') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
