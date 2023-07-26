<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use App\Models\Joueur;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joueurs = Joueur::Paginate(10);
        // $joueurs = Joueur::all();

        return view('Joueur.index', compact("joueurs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Joueur $joueur)
    {
        $equipe = $joueur->equipe;
        return view('Joueur.show', compact('joueur','equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Joueur $joueur)
    {
        $equipes = Equipe::all();
        return view('Joueur.edit', compact('joueur', 'equipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Joueur $joueur)
    {
        // {{-- Nom	Prenom	numero	position	anneeNaissance	nationnalite	equipe_id --}}
        // dd($request->all());nationnalite

        $joueur->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'numero' => $request->numero,
            'position' => $request->position,
            'anneeNaissance' => $request->anneeNaissance,
            'nationnalite' => $request->nationnalite,
            'equipe_id' => $request->equipe_id
        ]);
        return redirect()->route('joueurs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
        return redirect()->route('joueurs.index');
    }
}
