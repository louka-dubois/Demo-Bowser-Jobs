<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidature extends Model
{
    protected $table = 'candidatures';
 
    protected $fillable = [
        'offre_emploi_id',
        'prenom',
        'nom',
        'courriel',
        'telephone',
        'message',
        'statut',
        'cv_path',
        'cv_original_name',
        'cv_mime_type',
        'cv_size',
    ];
 
    public function offreEmploi(): BelongsTo
    {
        return $this->belongsTo(OffreEmploi::class);
    }
}