<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Your Groupe Confirmation') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Confirm your groupe, and click 'Quit this groupe' bottun where you need.") }}
        </p>
    </header>

    <form method="post" action="{{ route('driver.profile.update') }}" class="mt-6 space-y-6">
        @if(Auth::guard('driver')->groupe_id)
            <div>
                <x-input-label for="groupe_name" :value="__('Your current groupe')" />
                <x-text-input id="groupe_name" name="groupe_name" type="text" class="mt-1 block w-full" :value="old('name', $user->groupe->name)" required autofocus autocomplete="groupe_name" />
            </div>
            <form method="POST" action="{{ route('groupe-secession') }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md flex flex-col sm:justify-center">{{ __('Quit this groupe') }}</button>
            </form>
        @else
            <p class="font-semibold text-xl text-gray-800 leading-tight">{{ __('You are not part of any groupe.') }}</p>
        @endif
    </form>


</section>
