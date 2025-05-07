<?php

namespace App\Http\Controllers;

use App\Models\MESSAGE;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Récupérer tous les messages
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function liste()
    {
        $messages = MESSAGE::with('c_u_i_s_i_n_i_e_r')->orderBy('DATEMESSAGE', 'desc')->get();
        return response()->json($messages);
    }

    /**
     * Créer un nouveau message
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajouter(Request $request)
    {
        $request->validate([
            'IDEMPLOYE' => 'required|integer|exists:CUISINIERS,IDEMPLOYE',
            'CONTENT' => 'required|string'
        ]);

        $message = MESSAGE::create([
            'IDEMPLOYE' => $request->IDEMPLOYE,
            'CONTENT' => $request->CONTENT,
            'DATEMESSAGE' => now()
        ]);

        return response()->json($message, 201);
    }
}