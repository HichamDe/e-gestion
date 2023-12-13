<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;
    protected $fillable = [
        "intitule",
        "description"
    ];
    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
