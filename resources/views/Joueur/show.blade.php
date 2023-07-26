@extends('layout.layout')
@section('content')
    <div class="container p-2">

        <table class="table table-bordered mt-3  rounded text-center">
            <thead>
                <tr class="table-primary">
                    <th>#id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>numero</th>
                    <th>position</th>
                    <th>anneeNaissance</th>
                    <th>nationnalite</th>
                    <th>equipe_id</th>
                    <th>nomEquipe</th>
                    <th>championnat</th>
                    <th>nombreTrophe</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $joueur->id }}</td>
                    <td>{{ $joueur->nom }}</td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->numero }}</td>
                    <td>{{ $joueur->position }}</td>
                    <td>{{ $joueur->anneeNaissance }}</td>
                    <td>{{ $joueur->nationnalite }}</td>
                    <td>{{ $joueur->equipe_id }}</td>

                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <table class="table table-bordered mt-3  rounded text-center">
                <thead class="table-dark text-white">
                    <tr>
                        <th>#id</th>
                        <th>Nom Equipe</th>
                        <th>Championnat</th>
                        <th>Nombre Trophe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $equipe->id }}</td>
                        <td>{{ $equipe->nomEquipe }}</td>
                        <td>{{ $equipe->championnat }}</td>
                        <td>{{ $equipe->nombreTrophe }}</td>
                    </tr>
                </tbody>
            </table>
        </table>
    </div>
@endsection
