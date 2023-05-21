<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrenciesController extends Controller
{
    public function index()
    {
        $devises = Currency::all();
        return response()->json($devises);
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:currencies',
            'name' => 'required',
        ]);

        $currency = Currency::create($request->all());
        // Traitée avec succès et nouvelle ressource de créee
        return response()->json($currency, 201);
    }

    public function show($id)
    {
        $currency = Currency::findOrFail($id);
        return response()->json($currency);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique:currencies,code,' . $id,
            'name' => 'required',
        ]);

        $currency = Currency::findOrFail($id);
        $currency->update($request->all());
        // Traitée avec succès et du contenu à renvoyer
        return response()->json($currency, 200);
    }

    public function destroy($id)
    {
        $currency = Currency::findOrFail($id);
        $currency->delete();
        // Traitée avec succès mais de contenu à renvoyer
        return response()->json(null, 204);
    }
}
