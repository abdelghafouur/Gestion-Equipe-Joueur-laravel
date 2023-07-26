<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipes = Equipe::Paginate(10);
        return view('Equipe.index', compact("equipes"));
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
    public function show(Equipe $equipe)
    {
        return view('Equipe.show', compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipe $equipe)
    {
        $Championnats = Equipe::select('championnat')->distinct()->get();
        return view('Equipe.edit', compact('equipe',"Championnats"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipe $equipe)
    {
        $equipe->update([
            'nomEquipe' => $request->nomEquipe,
            'championnat' => $request->championnat,
            'nombreTrophe' => $request->nombreTrophe,
        ]);
        return redirect()->route('equipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route('equipes.index');
    }
}
