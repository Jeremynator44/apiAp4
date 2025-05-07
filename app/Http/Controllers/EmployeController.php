<?php

namespace App\Http\Controllers;

use App\Models\EMPLOYE;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function liste(){
        return response()->json(EMPLOYE::all());
    }

    public function authentifierEmployer(Request $request){

        $validated = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'email' => 'Le champ :attribute doit être une adresse email valide.',
            ],
            [
                'email' => 'email',
                'password' => 'mot de passe',
            ]
        );

        $employe = EMPLOYE::where('MAIL', $validated['email'])->first();
        
        if (!$employe) {
            return response()->json(array("Status"=>"Mail incorrect"));
        }

        $hashP = bcrypt($validated['password']);

        if (!password_verify($validated['password'], $employe->MDP)) {
            return response()->json(array("Status"=>"Mot de passe incorrect"));
        }

        return response()->json($employe);
    }
}
