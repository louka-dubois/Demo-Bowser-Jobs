<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OffreEmploi extends Model
{
    protected $table = 'offres_emploi';
 
    protected $fillable = [
        'titre',
        'entreprise',
        'ville',
        'salaire',
        'description',
        'est_active',
    ];
 
    protected $casts = [
        'est_active' => 'boolean',
    ];
 
    public function candidatures(): HasMany
    {
        return $this->hasMany(Candidature::class);
    }
}