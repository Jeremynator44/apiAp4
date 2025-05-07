<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\CONCERNER;
use Illuminate\Http\Request;
use App\Models\ProduitCommande;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Créer une nouvelle commande
     */
    function ajouter(Request $request){
        $commande = new Commande();
        $commande->NUMTABLE = $request->NUMTABLE;
        $commande->IDETAT = $request->IDETAT;
        $commande->IDFACTURE = null;
        $commande->IDEMPLOYE = $request->IDEMPLOYE;
        $commande->DATE_COMMANDE = $request->DATE_COMMANDE;
        $commande->save();
        return response()->json($commande);
    }

    /**
     * Ajouter des produits à une commande existante
     */
    public function ajouterProduits(Request $request)
    {
        try {
            DB::beginTransaction();

            // Valider les données reçues
            $validated = $request->validate([
                'IDCOMMANDE' => 'required|integer|exists:commandes,id',
                'produits' => 'required|array',
                'produits.*.IDPRODUIT' => 'required|integer|exists:produits,id',
                'produits.*.quantite' => 'required|integer|min:1'
            ]);

            $commandeId = $validated['IDCOMMANDE'];

            // Insérer chaque produit
            foreach ($validated['produits'] as $produit) {
                CONCERNER::create([
                    'IDCOMMANDE' => $commandeId,
                    'IDPRODUIT' => $produit['IDPRODUIT'],
                    'QUANTITE' => $produit['quantite']
                ]);
            }

            DB::commit();

            return response()->json([
                'message' => 'Produits ajoutés avec succès'
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Erreur lors de l\'ajout des produits',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}