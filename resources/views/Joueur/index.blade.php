@extends('Layout.layout')
@section('content')
    <div class="p-3 ">
        <table class="table table-bordered table-striped  rounded  text-center">
            <tr>
                <th>Id  </th>
                <th>nom  </th>
                <th>prenom  </th>
                <th>numero  </th>
                <th>position  </th>
                <th>anneeNaissance  </th>
                <th>Nationnalite  </th>
                <th>equipe_id  </th>
                <th colspan="3">Operations</th>
            </tr>
            @forelse($joueurs as $joueur)
                <tr>
                    <td>{{ $joueur->id }}</td>
                    <td>{{ $joueur->nom }}</td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->numero }}</td>
                    <td>{{ $joueur->position }}</td>
                    <td>{{ $joueur->anneeNaissance }}</td>
                    <td>{{ $joueur->nationnalite }}</td>
                    <td>{{ $joueur->equipe_id }}</td>
                    <td><a href={{ route('joueurs.show', ['joueur' => $joueur->id]) }}>Consulter</a> </td>
                    <td><a href={{ route('joueurs.edit', ['joueur' => $joueur->id]) }}>Edit</a></td>
                    <td>
                        <form action={{ route('joueurs.destroy', ['joueur' => $joueur->id]) }} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Aucune données trouvée</td>
                </tr>
            @endforelse
        </table>
        <div class="d-flex align-items-center justify-content-center p-2">{{ $joueurs->links() }}</div>

    </div>
@endsection
