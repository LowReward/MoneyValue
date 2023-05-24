<?php

namespace App\Http\Controllers;

use App\Models\Pair;
use Illuminate\Http\Request;

class PairsController extends Controller
{
    public function index()
    {
        // Pour l'index user, on ne retourne que les informations importantes au publique.
        $pairs = Pair::select('currency_from', 'currency_to', 'conversion_rate')->get();
        //Retourne la liste des Pairs sous le format json
        return response()->json($pairs);
    }

    public function adminindex()
    {
        // Pour notre adminIndex, on retourne l'entierté des infromations.
        $pairs = Pair::all();
        //Retourne la liste des Pairs sous le format json
        return response()->json($pairs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'currency_from' => 'required|string',
            'currency_to' => 'required|string',
            'conversion_rate' => 'required|numeric',
        ]);

        $pair = Pair::create($request->all());
        // Traitée avec succès et nouvelle ressource de créee (201)
        return response()->json($pair, 201);
    }

    public function update(Request $request, Pair $pair)
    {
        $request->validate([
            'currency_from' => 'required|string',
            'currency_to' => 'required|string',
            'conversion_rate' => 'required|numeric',
        ]);

        $pair->update($request->all());
        // Traitée avec succès et du contenu à renvoyer (200)
        return response()->json($pair, 200);
    }

    public function destroy(Pair $pair)
    {
        //Supprime la pair en entête de requête
        $pair->delete();
         // Traitée avec succès mais de contenu à renvoyer (204)
        return response()->json(null, 204);
    }
}
