@extends('layout.layout')
@section('content')
    <div class="container p-2">
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
