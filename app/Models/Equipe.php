<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomEquipe',
        'championnat',
        'nombreTrophe',
    ];
    // protected $table="Equipe"
}
