<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_commande",
        "datetime"

    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
