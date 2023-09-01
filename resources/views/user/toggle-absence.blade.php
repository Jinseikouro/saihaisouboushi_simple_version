<x-guest-like-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User absence confirmation form') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center mt-4">
        <form method="POST" action="{{ route('toggle-absence') }}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">

            @if ($user->absence)
            <div style="font-weight: bold; font-size: 24px;">{{ __('you are at home now.') }}</div>
            <div class="flex justify-center">
                <button type="submit" class=" px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4 flex items-center justify-center">
                    {{ __('Turn your status into absence') }}
                </button>
            </div>

            @else
            <div style="font-weight: bold; font-size: 24px;">{{ __('you are currently absence.') }}</div>
            <div class="flex justify-center">
                <button type="submit" class=" px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4 flex items-center justify-center">
                    {{ __('Turn your status into present') }}
                </button>
            </div>
            @endif
        </form>
    </div>
</x-guest-like-app-layout>
