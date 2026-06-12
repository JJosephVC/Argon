<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreatmentTypeRequest;
use App\Models\TreatmentType;

class TreatmentTypeController extends Controller
{
    public function index(){
        $treatmenttypeI = TreatmentType::all();
        return view ('TreatmentType.index', compact('treatmenttypeI'));
    }

    public function create(){
        $treatmenttypeC = new TreatmentType();
        return view('TreatmentType.create', compact('treatmenttypeC'));
    }

    public function store(TreatmentTypeRequest $request){
        TreatmentType::create($request->validated());
        return redirect()->route('treatments_types.index')->with('success','Tipo de tratamiento creado');
    }

    public function show(string $id){
        $treatmenttypeS = TreatmentType::findOrFail($id);
        return view('TreatmentType.show', compact('treatmenttypeS'));
    }

    public function edit(string $id){
        $treatmenttypeE = TreatmentType::findOrFail($id);
        return view('TreatmentType.edit', compact('treatmenttypeE'));
    }

    public function update(TreatmentTypeRequest $request, string $id){
        $treatmenttypeU = TreatmentType::findOrFail($id);
        $treatmenttypeU->update($request->validated());
        return redirect()->route('treatments_types.index')->with('success','Tipo de tratamiento actualizado');
    }

    public function destroy(string $id){
        $treatmenttypeD = TreatmentType::findOrFail($id);
        $treatmenttypeD->delete();
        return redirect()->route('treatments_types.index')->with('success','Tipo de tratamiento eliminado');
    }
}
