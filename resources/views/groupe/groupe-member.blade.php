<x-app-layout>
    <form method="POST" action="{{ route('groupe-member', ['groupes' => $groupe->id]) }}">
    @csrf

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Groupe member addtion form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('groupe.partials.groupe-information')
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="ml-4">
            {{ __('Join this groupe') }}
        </x-primary-button>
    </div>
</x-app-layout>
