<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;
   protected $table = "commandes";

    protected $fillable=[
        "client_id"
    ];
    public function client(){
        return $this->belongsTo(Client::class,"client_id");
    }
    public function produit(){
        return $this->belongsTo(Produit::class);
    }

    // protected function 
}
