<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 flex flex-col sm:justify-center items-right">
            {{ __('Groupe name list') }}
        </h2>
    </header>

    <div class="mt-6 space-y-6 flex flex-col sm:justify-center items-right">
        <table class="table table-bordered">
            <tr>
                <th>{{ __('Groupe ID') }}</th>
                <th>{{ __('Groupe Name') }}</th>
            </tr>
            @foreach ($groupes as $groupe)
            <tr>
                <td class="border">{{ $groupe->id }}</td>
                <td class="border">
                    <a href="{{ route('groupe-member', ['groupes' => $groupe->id]) }}" class="text-blue-500 hover:underline">
                        <span class="text-blue-500 hover:underline">{{ $groupe->name }}</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="flex justify-center">
        <link rel="stylesheet" href="{{ '/css/app.css' }}">
        {{ $groupes->links() }}
    </div>

</section>
