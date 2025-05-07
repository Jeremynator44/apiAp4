<?php

namespace App\Http\Controllers;

use App\Models\PRODUIT;
use Illuminate\Http\Request;

class PlatsController extends Controller
{
    public function liste(){
        return response()->json(PRODUIT::all());
    }

    public function update(Request $request){
        $commande = new PRODUIT();
        $commande->IDPRODUIT = $request->IDPRODUIT;
        $commande->IDCATEGORIE = $request->IDCATEGORIE;
        $commande->TITRE = $request->TITRE;
        $commande->DESCRIPTION = $request->DESCRIPTION;
        $commande->DATE_COMMANDE = $request->DATE_COMMANDE;
        $commande->save();
        return response()->json($commande);
    }
}
