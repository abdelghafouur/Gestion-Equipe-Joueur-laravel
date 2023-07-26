@extends('Layout.layout')
@section('content')
    {{-- {{ $equipes->links() }} --}}

    <table class="table table-bordered table-striped  text-center">
        <tr>
            <th>Id : </th>
            <th>nomEquipe : </th>
            <th>championnat : </th>
            <th>nombreTrophe : </th>
        </tr>
        @forelse($equipes as $equipe)
            <tr>
                <td>{{ $equipe->id }}</td>
                <td>{{ $equipe->nomEquipe }}</td>
                <td>{{ $equipe->championnat }}</td>
                <td>{{ $equipe->nombreTrophe }}</td>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Aucune données trouvée</td>
            </tr>
        @endforelse
    </table>
@endsection
