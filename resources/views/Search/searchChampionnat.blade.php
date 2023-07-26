@extends('Layout.layout')
@section('content')
    <form action={{ route('searchChampionnat') }} method="POST" class="p-3">
        @csrf
        {{-- <h3>Recherche par Championnat :</h3> --}}
        <div class="d-flex no-wrap row align-items-center">
            <h5 class="col-3">Choisir Championnat :</h5>
            <select class="col-3 form-control" name="championnat" id="championnat" onchange="this.form.submit()"  >
                @foreach ($Championnats as $Championnat)
                    <option value={{ $Championnat->championnat }}
                        @selected(@isset($championnatChoisie) ? $championnatChoisie == $Championnat->championnat : false)>
                        {{ $Championnat->championnat }}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- <button type="submit" class="btn btn-primary">Recherche</button> --}}
    </form>
    @isset($equipes)
        <table class="table table-bordered table-striped  text-center">
            <tr>
                <th>nomEquipe : </th>
                <th>nombreTrophe : </th>

            </tr>
            @forelse($equipes as $equipe)
                <tr>

                    <td>{{ $equipe->nomEquipe }}</td>
                    <td>{{ $equipe->nombreTrophe }}</td>


                </tr>
            @empty
                <tr>
                    <td colspan="6">Aucune données trouvée</td>
                </tr>
            @endforelse
        </table>
    @endisset
@endsection
