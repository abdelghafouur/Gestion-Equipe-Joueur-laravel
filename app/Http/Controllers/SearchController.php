<?php
namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchLiga()
    {
        $equipes = Equipe::where('championnat', '=', "liga")
            ->get();
        return view('Search.searchLiga', compact('equipes'));
    }
    public function searchEquipeChampionnat()
    {
        $equipes = Equipe::orderBy('championnat', 'desc')
            ->get();
        return view('Search.searchEquipeChampionnat', compact('equipes'));
    }
    public function searchJoueurEtEquipe()
    {
        $resultats = Equipe::join('Joueurs', 'Joueurs.equipe_id', 'Equipes.id')
            ->select('nomEquipe', 'championnat', 'nombreTrophe', 'nom', 'prenom', 'numero', 'position', 'anneeNaissance', 'nationnalite')
            ->orderBy('nomEquipe', 'asc')
            ->get();
        // $resultats = Equipe::orderBy('nomEquipe')
        // ->get();
        return view('Search.searchJoueurEtEquipe', compact('resultats'));
    }
    public function searchEquipe()
    {
        $Equipes = Equipe::all();
        // $Equipes = Equipe::orderByDesc('nomEquipe')
        // ->get();
        // dd($Equipes);
        return view('Search.searchJoueurParEquipe', compact('Equipes'));
    }
    public function searchJoueurParEquipe(Request $request)
    {
        $Equipes = Equipe::all();
        $idEquipe = $request->idEquipe;
        $joueurs = Joueur::where('Equipe_id', "=", $idEquipe)->get();
        // $request->isMethod('GET');
        return view('Search.searchJoueurParEquipe', compact('Equipes', 'joueurs', 'idEquipe'));
    }
    public function searchChampionnat(Request $request)
    {
        $Championnats = Equipe::select('championnat')->distinct()->get();
        if ($request->isMethod('GET')) {
            return view("Search.searchChampionnat", compact("Championnats"));
        }
        else if ($request->isMethod('POST'))
        {
            $championnatChoisie = $request->championnat;
            $equipes = Equipe::where('championnat', '=', $championnatChoisie)
                ->get();
            return view("Search.searchChampionnat", compact("Championnats", "equipes", "championnatChoisie"));
        }
    }
}
