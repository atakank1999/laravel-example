<x-admin-master>
    @section('content')
    @if (auth()->user()->userHasRole('Admin'))
        <h1>AAdmin</h1>
    @endif




    @endsection
</x-admin-master>
