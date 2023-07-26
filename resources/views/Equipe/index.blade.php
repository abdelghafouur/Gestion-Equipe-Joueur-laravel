@extends('Layout.layout')
@section('content')

    <table class="table table-bordered table-striped  text-center">
        <tr>
            <th>Id : </th>
            <th>nomEquipe : </th>
            <th>championnat : </th>
            <th>nombreTrophe : </th>
            <th colspan="3">Operations</th>
        </tr>
        @forelse($equipes as $equipe)
            <tr>
                <td>{{ $equipe->id }}</td>
                <td>{{ $equipe->nomEquipe }}</td>
                <td>{{ $equipe->championnat }}</td>
                <td>{{ $equipe->nombreTrophe }}</td>
                </td>
                <td><a href={{ route('equipes.show', ['equipe' => $equipe->id]) }}>Consulter</a> </td>
                <td><a href={{ route('equipes.edit', ['equipe' => $equipe->id]) }}>Edit</a></td>
                <td>
                    <form action={{ route('equipes.destroy', ['equipe' => $equipe->id]) }} method="post">
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
    <div class="d-flex align-items-center justify-content-center p-2">{{ $equipes->links() }}</div>

@endsection
