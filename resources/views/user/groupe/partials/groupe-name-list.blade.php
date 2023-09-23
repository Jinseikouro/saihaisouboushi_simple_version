<section>
    <header>
         <!-- CSS only -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- JavaScript Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
                    <a href="{{ route('user.groupe-member', ['groupes' => $groupe->id]) }}" class="text-blue-500 hover:underline">
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
