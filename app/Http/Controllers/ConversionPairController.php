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
            // Si la paire de conversion n'est pas trouvée, renvoie une réponse avec le code d'erreur 404 (Not Found)

            return response()->json(['error' => "The specified conversion pair does not exist."], 404);
        }

        // Effectue le calcul de conversion
        $conversionAmount = $amount * $pair->conversion_rate;
        // Retire tous les 0 inutiles avec rtrim [ exemple : 0.1200000 -> 0.12] et ensuite Floatval repasse la valeur en float
        $conversionAmount = floatval(rtrim($conversionAmount, '0'));
        $pair->increment('request_count');

        // Renvoie une réponse JSON avec les détails de la conversion
        return response()->json([
            'from_currency' => $fromCurrency,
            'to_currency' => $toCurrency,
            'amount' => $amount,
            'conversion_amount' => $conversionAmount,
        ]);
    }
    public function status()
    {
        // Renvoie une réponse JSON avec le statut "ok"
        return response()->json(['status' => 'ok']);
    }
}
