<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;
    protected $fillable = [
        "command_id",
        "produit_id",
        "qte",
        "prix",
    ];
    public function commande(){
        return $this->belongsTo(Commande::class);
    }
    public function (){
        return $this->belongsTo(Commande::class);
    }
}
