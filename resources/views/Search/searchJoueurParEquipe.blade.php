@extends('Layout.layout')
@section('content')
    <form action={{ route('searchJoueurParEquipe') }} method="POST" class="p-3">
        @csrf
        <div class="d-flex no-wrap row align-items-center">
        {{-- <h2>Recherche par Nom d'equipe :</h2> --}}
        <h5 class="col-3">Choisir le Nom d'equipe :</h5>
        <select name="idEquipe" id="idEquipe" class="form-control col-3">
            @foreach ($Equipes as $Equipe)
                <option value={{ $Equipe->id }}
                    @selected(@isset($idEquipe) ? $idEquipe == $Equipe->id : false)>
                    {{ $Equipe->nomEquipe }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary ml-2">Recherche</button>
        </div>
    </form>
    @isset($joueurs)
        <table class="table table-bordered table-striped  text-center">
            <tr>
                <th>nom : </th>
                <th>prenom : </th>
                <th>numero : </th>
                <th>position : </th>
                <th>anneeNaissance : </th>
                <th>nationnalite : </th>
            </tr>
            @forelse($joueurs as $joueur)
                <tr>

                    <td>{{ $joueur->nom }}</td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->numero }}</td>
                    <td>{{ $joueur->position }}</td>
                    <td>{{ $joueur->anneeNaissance }}</td>
                    <td>{{ $joueur->nationnalite }}</td>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Aucune données trouvée</td>
                </tr>
            @endforelse
        </table>
    @endisset
@endsection
