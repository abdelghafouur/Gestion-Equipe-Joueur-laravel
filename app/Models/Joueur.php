<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Joueur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'numero',
        'position',
        'anneeNaissance',
        'nationnalite',
        "equipe_id"
    ];
    public function equipe(): BelongsTo {
        return $this->belongsTo(Equipe::class);
    }
}
