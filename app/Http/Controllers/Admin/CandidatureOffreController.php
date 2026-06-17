<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidature;
use App\Models\OffreEmploi;
use Illuminate\Support\Facades\Storage;

class CandidatureOffreController extends Controller
{
    public function index(OffreEmploi $offreEmploi)
    {
        $candidatures = $offreEmploi->candidatures()
            ->latest()
            ->get();

        return view('admin.offres.candidatures', compact('offreEmploi', 'candidatures'));
    }

    public function download(Candidature $candidature)
    {
        abort_unless($candidature->cv_path, 404);

        return Storage::disk('public')->download(
            $candidature->cv_path,
            $candidature->cv_original_name,
        );
    }
}
