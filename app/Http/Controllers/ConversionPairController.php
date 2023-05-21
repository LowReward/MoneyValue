<?php

namespace App\Http\Controllers;

use App\Models\Pair;
use Illuminate\Http\Request;

class ConversionPairController extends Controller
{
    public function convert(Request $request)
    {
        // Valider les données de la requête
        $validatedData = $request->validate([
            'from_currency' => 'required',
            'to_currency' => 'required',
            'amount' => 'required|numeric',
        ]);

        $fromCurrency = $validatedData['from_currency'];
        $toCurrency = $validatedData['to_currency'];
        $amount = $validatedData['amount'];

        // Rechercher la paire de conversion correspondante
        $pair = Pair::where('currency_from', $fromCurrency)
            ->where('currency_to', $toCurrency)
            ->first();

        if (!$pair) {
            return response()->json(['error' => "La paire de conversion spécifiée n'existe pas."], 404);
        }

        // Effectuer le calcul de conversion
        $conversionAmount = $amount * $pair->rate;
        $pair->increment('request_count');

        return response()->json([
            'from_currency' => $fromCurrency,
            'to_currency' => $toCurrency,
            'amount' => $amount,
            'conversion_amount' => $conversionAmount,
            'request_count' => $pair->request_count,
        ]);
    }
}
