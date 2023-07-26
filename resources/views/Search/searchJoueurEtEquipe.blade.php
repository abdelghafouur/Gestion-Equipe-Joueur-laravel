@extends('Layout.layout')
@section('content')
    {{-- {{ $equipes->links() }} --}}

    <table class="table table-bordered table-striped  text-center">
        <tr>
            <th>nomEquipe : </th>
            <th>championnat : </th>
            <th>nombreTrophe : </th>
            <th>nom : </th>
            <th>prenom : </th>
            <th>numero : </th>
            <th>position : </th>
            <th>anneeNaissance : </th>
            <th>nationnalite : </th>
        </tr>
        @forelse($resultats as $resultat)
            <tr>
                <td>{{ $resultat->nomEquipe }}</td>
                <td>{{ $resultat->championnat }}</td>
                <td>{{ $resultat->nombreTrophe }}</td>
                <td>{{ $resultat->nom }}</td>
                <td>{{ $resultat->prenom }}</td>
                <td>{{ $resultat->numero }}</td>
                <td>{{ $resultat->position }}</td>
                <td>{{ $resultat->anneeNaissance }}</td>
                <td>{{ $resultat->nationnalite }}</td>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Aucune données trouvée</td>
            </tr>
        @endforelse
    </table>
@endsection
