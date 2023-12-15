<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\LigneCommande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "command index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("commandes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $client = [
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "ville"=>$request->ville,
            "adresse"=>$request->adresse,
            "tele"=>$request->tele,
        ];
        $produits = session()->get("user.produits");

        $client = Client::create($client);
        $command = Commande::create(["client_id"=>$client->id]);
        foreach($produits as $prod){
            LigneCommande::create([
                "commande_id"=>$command->id,
                "produit_id"=>$prod["id"],
                "qte"=>$prod["qnt"],
                "prix"=>$prod["prix_u"]

            ]);
        }

        return redirect()->route("commandes.index");


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
