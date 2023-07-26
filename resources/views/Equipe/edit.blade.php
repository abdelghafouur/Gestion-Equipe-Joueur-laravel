@extends('layout.layout')


@section('content')
    <h4>Update equipe :</h4>
    <form method="POST" class="mb-3 mt-3" action={{ route('equipes.update', ['equipe' => $equipe->id]) }}>
        {{-- Nom	Prenom	numero	position	anneeNaissance	nationnalite	equipe_id --}}
        @csrf
        @method('PATCH')
        <table>
            <tr>
                <td>
                    nomEquipe :
                </td>
                <td>
                    <input class="form-control" type="text" name="nomEquipe" value={{ $equipe->nomEquipe }}>
                </td>
            </tr>
            <tr>
                <td>
                    championnat :
                </td>
                <td>
                    {{-- <input class="form-control" type="text" name="championnat" value={{ $equipe->championnat }}> --}}
                    <select name="championnat" id="championnat" class="form-control">
                    @foreach ($Championnats as $Championnat)
                        <option value={{ $Championnat->championnat }} @selected(@isset($Championnats) ? $equipe->championnat == $Championnat->championnat : false)>
                            {{ $Championnat->championnat }}
                        </option>
                    @endforeach
                    </select>
                </td>

            </tr>
            <tr>
                <td>
                    nombreTrophe :
                </td>
                <td>
                    <input class="form-control" type="text" name="nombreTrophe" value={{ $equipe->nombreTrophe }}>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-dark">Update</button>
                </td>
            </tr>
        </table>
    </form>
    <a href={{ route('equipes.index') }}>Retour a page d'accueill</a>
@endsection
