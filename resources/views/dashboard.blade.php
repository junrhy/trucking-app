<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="bg-white">
            <div class="overflow-hidden sm:px-6">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
