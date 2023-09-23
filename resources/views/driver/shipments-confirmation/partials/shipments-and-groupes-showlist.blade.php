<section>
    <header>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </header>
    <div class="mt-6 space-y-6 flex flex-col sm:justify-center items-right">

        <table class="table table-bordered table-sm">
            <tr>
                <th>{{ __('Shipment ID') }}</th>
                <th>{{ __('Customer post code') }}</th>
                <th>{{ __('Customer address') }}</th>
                <th>{{ __('delivery start time') }}</th>
                <th>{{ __('delivery end time') }}</th>
                <th>{{ __('Deliverable or not') }}</th>
                <th>{{ __('Delivery status') }}</th>
                <th>{{ __('End delivery') }}</th>
            </tr>
            @foreach(
                $shipments as $shipment)

                @php
                    $groupe = App\Models\Groupe::find($shipment->groupe_id);
                    $startDateTime = \Carbon\Carbon::parse($shipment->delivery_start_time);
                    $endDateTime = \Carbon\Carbon::parse($shipment->delivery_end_time);
                @endphp
                <tr>
                    <td class="border">{{ $shipment->id }}</td>
                    <td class="border">{{ substr($groupe->post_code, 0, 3) . '-' . substr($groupe->post_code, 3) }}</td>
                    <td class="border">{{ $groupe->address }}</td>
                    <td class="border">{{ $startDateTime->toTimeString() }}</td>
                    <td class="border">{{ $endDateTime->toTimeString() }}</td>
                    @if ($groupe->absence == true)
                        <td class="border">&#127383;</td>
                    @elseif ($groupe->absence == false)
                        <td class="border">&#10060;</td>
                    @endif
                    @if ($shipment->delivery_status == true)
                        <td class="border">&#128666;</td>
                    @elseif ($shipment->delivery_status == false)
                        <td class="border">&#x2705;</td>
                    @endif
                    <td class="border">
                        <form method="POST" action="{{ route('driver.customer.status') }}">
                            @csrf
                            <input type="hidden" name="shipment_id" value="{{ $shipment->id }}">
                            <button type="submit" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                                {{ __('Alter status') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

</section>
