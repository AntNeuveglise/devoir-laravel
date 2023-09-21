<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    use HasFactory;

    function Hall()
    {
        return $this->belongsTo(Hall::class);
    }

    function identite(bool $prenom_en_premier = true): string
    {
        return $prenom_en_premier
            ? $this->prenom . ' ' . $this->nom
            : $this->nom . ' ' . $this->prenom;
    }
}
