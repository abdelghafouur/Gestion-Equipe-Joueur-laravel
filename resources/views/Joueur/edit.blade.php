@extends('layout.layout')


@section('content')
    <h4>Update Joueur :</h4>
    <form method="POST" class="mb-3 mt-3" action={{ route('joueurs.update', ['joueur' => $joueur->id]) }}>
        {{-- Nom	Prenom	numero	position	anneeNaissance	nationnalite	equipe_id --}}
        @csrf
        @method('PATCH')
        <table>
            <tr>
                <td>
                    nom :
                </td>
                <td>
                    <input class="form-control" type="text" name="nom" value={{ $joueur->nom }}>
                </td>
            </tr>
            <tr>
                <td>
                    prenom :
                </td>
                <td>
                    <input class="form-control" type="text" name="prenom" value={{ $joueur->prenom }}>
                </td>
            </tr>
            <tr>
                <td>
                    numero :
                </td>
                <td>
                    <input class="form-control" type="text" name="numero" value={{ $joueur->numero }}>
                </td>
            </tr>
            <tr>
                <td>
                    position :
                </td>
                <td>
                    <input class="form-control" type="text" name="position" value={{ $joueur->position }}>
                </td>
            </tr>
            <tr>
                <td>
                    anneeNaissance :
                </td>
                <td>
                    <input class="form-control" type="text" name="anneeNaissance" value={{ $joueur->anneeNaissance }}>
                </td>
            </tr>
            <tr>
                <td>
                    nationnalite :
                </td>
                <td>
                    <input class="form-control" type="text" name="nationnalite" value={{ $joueur->nationnalite }}>
                </td>
            </tr>
            <tr>
                <td>
                    Equipe :
                </td>
                <td>
                    <select name="equipe_id" id="equipe_id" class="form-control">
                        <option value="rien" disabled>Choisire equipe</option>
                        @foreach ($equipes as $equipe)
                            <option @selected($equipe->id == $joueur->equipe_id) value={{ $equipe->id }}>{{ $equipe->nomEquipe }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-dark">Update</button>
                </td>
            </tr>
        </table>
    </form>
    <a href={{ route('joueurs.index') }}>Retour a page d'accueill</a>
@endsection
