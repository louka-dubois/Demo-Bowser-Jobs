<?php

namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
 
class OffreEmploiController extends Controller
{
    public function index()
    {
        $offres = OffreEmploi::withCount('candidatures')
            ->latest()
            ->get();
 
        return view('admin.offres.index', compact('offres'));
    }
 
    public function create()
    {
        return view('admin.offres.create');
    }
 
    public function store(Request $request)
    {
        OffreEmploi::create($this->validatedData($request));
 
        return redirect()->route('admin.offres.index')
            ->with('success', 'Offre ajoutée.');
    }
 
    public function edit(OffreEmploi $offreEmploi)
    {
        return view('admin.offres.edit', compact('offreEmploi'));
    }
 
    public function update(Request $request, OffreEmploi $offreEmploi)
    {
        $offreEmploi->update($this->validatedData($request));
 
        return redirect()->route('admin.offres.index')
            ->with('success', 'Offre modifiée.');
    }
 
    public function destroy(OffreEmploi $offreEmploi)
    {
        $offreEmploi->delete();
 
        return redirect()->route('admin.offres.index')
            ->with('success', 'Offre supprimée.');
    }
 
    private function validatedData(Request $request): array
    {
        $validated = $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'entreprise' => ['required', 'string', 'max:255'],
            'ville' => ['nullable', 'string', 'max:255'],
            'salaire' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'est_active' => ['nullable', 'boolean'],
        ]);
 
        $validated['est_active'] = $request->boolean('est_active');
 
        return $validated;
    }
}
