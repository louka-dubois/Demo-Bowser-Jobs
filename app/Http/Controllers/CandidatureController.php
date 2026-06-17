<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OffreEmploi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CandidatureController extends Controller
{
    public function create(OffreEmploi $offreEmploi)
    {
        abort_unless($offreEmploi->est_active, 404);

        return view('candidatures.create', compact('offreEmploi'));
    }

    public function store(Request $request, OffreEmploi $offreEmploi)
    {
        abort_unless($offreEmploi->est_active, 404);

        $validated = $request->validate([
            'prenom' => ['required', 'string', 'max:100'],
            'nom' => ['required', 'string', 'max:100'],
            'courriel' => ['required', 'email', 'max:255'],
            'telephone' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:2000'],
            'cv' => [
                'required',
                'file',
                'max:2048',
                'mimes:pdf,doc,docx,txt,rtf,odt',
            ],
        ]);

        $file = $request->file('cv');
        $extension = $file->getClientOriginalExtension();
        $storedName = Str::uuid() . '.' . $extension;
        $path = $file->storeAs('cvs', $storedName, 'public');

        $validated['cv_path'] = $path;
        $validated['cv_original_name'] = $file->getClientOriginalName();
        $validated['cv_mime_type'] = $file->getMimeType();
        $validated['cv_size'] = $file->getSize();

        $offreEmploi->candidatures()->create($validated);

        return redirect()
            ->route('emplois.show', $offreEmploi)
            ->with('success', 'Votre candidature a été envoyée.');
    }
}