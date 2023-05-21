<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // Récupère l'email et le mot de passe de la requête entrante
    $credentials = $request->only('email', 'password');
    $admin = Admin::where('email', $credentials['email'])->first();
    // Si l'email admin ou le mdp hashé n'est pas dans la database alors on renvoie une erreur 401 ( "!" pour la négation true/false )
    if (!$admin || !Hash::check($credentials['password'], $admin->password)) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    $token = $admin->createToken('admin-token')->plainTextToken;

    return response()->json(['token' => $token]);
}

}
