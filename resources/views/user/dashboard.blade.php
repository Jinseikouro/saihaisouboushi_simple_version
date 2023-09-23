<x-app-layout>
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Link list for user') }}
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                    <li class="p-2 text-gray-900"><a href="{{ route('user.groupe-register') }}" class="custom-link">{{ __("Groupe register form") }}</a></li>
                    <li class="p-2 text-gray-900"><a href="{{ route('user.groupe-showlist') }}" class="custom-link">{{ __("Groupe show list") }}</a></li>
                    <li class="p-2 text-gray-900"><a href="{{ route('user.toggle-absence') }}" class="custom-link">{{ __("Change user absence status") }}</a></li>
                    <li class="p-2 text-gray-900"><a href="{{ route('user.profile.edit') }}" class="custom-link">{{ __("User profile form") }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
