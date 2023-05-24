<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Récupère l'email et le mot de passe de la requête entrante
        $credentials = $request->only('email', 'password');
        // Recherche l'admin en utilisant l'email
        $admin = Admin::where('email', $credentials['email'])->first();
        // Si l'email admin ou le mdp hashé n'est pas dans la database alors on renvoie une erreur 401 ( "!" pour la négation true/false )
        if (!$admin || !Hash::check($credentials['password'], $admin->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Génère un token d'authentification pour l'admin
        $token = $admin->createToken('admin-token')->plainTextToken;

        // Renvoie une réponse JSON contenant le jeton d'authentification
        return response()->json(['token' => $token]);
    }
}
