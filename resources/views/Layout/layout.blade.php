<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <title>layout</title>

</head>

<body>
    <div class="container mt-4 ">
        <div class="row border border-3 border-bottom-0 p-3">
            <div class="col-sm-12 text-center ">
                <h4>Gestion Joueur/Equipe :</h4>
            </div>
        </div>
        <div class="row border border-3 p-3">
            <div class="col-sm-9 d-flex ml-5 justify-content-between">

                <a href={{ route('home') }}>Accueil</a>
                <a href={{ route('equipes.index') }}>equipe</a>
                <a href={{ route('joueurs.index') }}>joueur</a>
                <div class="d-flex">
                    <div class="dropdown mr-1">
                        <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                            Search by
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href={{ route('searchLiga') }}>recherche equipe Liga</a>
                            <a class="dropdown-item" href={{ route('searchEquipeChampionnat') }}>recherche equipe trie
                                par championnat</a>
                            <a class="dropdown-item" href={{ route('searchJoueurEtEquipe') }}>recherche joueurs et leur
                                equipe</a>
                            <a class="dropdown-item" href={{ route('searchJoueurParEquipe') }}>recherche joueurs par nom
                                equipe </a>
                            <a class="dropdown-item" href={{ route('searchChampionnat') }}>recherche par Championnat
                            </a>
                        </div>
                    </div>
                </div>
                <h5 class="ml-2 ">Bienvenu Mr {{ Auth::user()->name }}</h5>
                <a href={{ route('logout') }}>
                    <button class="btn btn-danger">
                        se deconnecter
                    </button>
                </a>
            </div>
            <div class="col-sm-3"></div>

        </div>
        <div class="row">

            <div class="col-sm-12 border border-3 border-top-0 border-bottom-0">
                @yield('content')
            </div>
        </div>
        <div class="row border border-3 p-3 ">
            <div class="col-sm-12 text-center">
                <span class="footerText">Copy-right 2022-2023</span>
            </div>
        </div>
    </div>

</body>

</html>
