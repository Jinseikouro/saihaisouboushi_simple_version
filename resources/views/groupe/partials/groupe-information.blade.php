<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Groupe information') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6 flex flex-col sm:justify-center items-right">
        <div>
            <x-input-label for="groupe_name" :value="__('Groupe Name')" />
            <x-text-input id="groupe_name" name="groupe_name" type="text" class="mt-1 block w-full" :value="$groupe->name" disabled />
        </div>
        <div>
            <x-input-label :value="__('User Name')" />
        @foreach($users as $user)
            <x-text-input id="user_name" name="user_name" type="text" class="mt-1 block w-full" :value="$user->name" disabled />
        @endforeach
        </div>
    </div>
</section>
