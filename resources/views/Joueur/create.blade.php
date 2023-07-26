@extends('layouts.layout2')
@section('content')
    <h4>Formulaire Etudiant :</h4>
    <form method="POST" class="mt-3 mb-3" action={{ route('categories.store') }}>
        @csrf
        <table>

            <tr>
                <td>
                    NomCategorie :
                </td>
                <td>
                    <input type="text" name="nomCategorie">

                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </td>
            </tr>
        </table>
    </form>
    {{-- <a href={{ route('categories.index') }}>Retour a page d'accueill</a> --}}
@endsection
