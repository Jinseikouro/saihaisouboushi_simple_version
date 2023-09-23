<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User status confirmation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <p class="border">
                        <p1 style="margin: 0;">&#127383;={{ __('You can deliver.') }}</p1>
                        <p2 style="margin: 0;">&#10060;={{ __('You cannot deliver.') }}</p2>
                    </p>
                    <p class="border">
                        <p3 style="margin: 0;">&#128666;={{ __('Delivery on the way') }}</p3>
                        <p4 style="margin: 0;">&#x2705;={{ __('Delivery completed') }}</p4>
                    </p>
                    @include('driver.shipments-confirmation.partials.shipments-and-groupes-showlist')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
