<x-guest-like-app-layout>
    <form method="POST" action="{{ route('groupe-register') }}">
        @csrf

        <div style="font-family: cursiv; font-size: 30px; text-align:center">
            {{ __('Groupe register page') }}
        </div>

        <!--Groupe Name -->
        <div>
            <x-input-label for="groupe_name" :value="__('Groupe Name')" />
            <x-text-input id="groupe_name" class="block mt-1 w-full" type="text" name="name" :value="old('groupe_name')" required autofocus autocomplete="groupe_name" />
            <x-input-error :messages="$errors->get('groupe_name')" class="mt-2" />
        </div>

        <!--Post Code -->
        <div>
            <x-input-label for="post_code" :value="__('Post Code')" />
            <x-text-input id="post_code" class="block mt-1 w-full" type="text" name="post_code" :value="old('post_code')" required autofocus autocomplete="post_code" />
            <x-input-error :messages="$errors->get('post_code')" class="mt-2" />
        </div>

        <!--Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-like-app-layout>
