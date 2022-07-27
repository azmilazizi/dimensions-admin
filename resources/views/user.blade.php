<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-2">
            <h2>
                {{ __('User') }}
            </h2>
            <div>
                {{ Breadcrumbs::render('user') }}
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl bg-base-100 sm:rounded-lg">
                @livewire('users.show')
            </div>
        </div>
    </div>
</x-app-layout>
