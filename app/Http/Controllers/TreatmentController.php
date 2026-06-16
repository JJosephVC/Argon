<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreatmentRequest;
use App\Models\Record;
use App\Models\Treatment;
use App\Models\TreatmentType;

class TreatmentController extends Controller
{
    public function index(){
        $treatmentI = Treatment::with('treatment_type', 'record.patient')->get();
        $treatmentC = new Treatment();
        $treatmenttypeC = TreatmentType::all();
        $recordC = Record::with('patient')->get();

        return view('Treatment.index', compact('treatmentI', 'treatmentC', 'treatmenttypeC', 'recordC'));
    }
    public function create(){
        $treatmentC = new Treatment();
        $treatmenttypeC = TreatmentType::all();
        $recordC = Record::with('patient')->get();
        return view('Treatment.create', compact('treatmentC','treatmenttypeC','recordC'));
    }
    public function store(TreatmentRequest $request){
        Treatment::create($request->validated());
        return redirect()->route('treatments.index')->with('success','Tratamiento creado');
    }
    public function show(string $id){
        $treatmentS = Treatment::with('treatment_type','record.patient')->findOrFail($id);
        return view('Treatment.show', compact('treatmentS'));
    }
    public function edit(string $id){
        $treatmentE = Treatment::with('treatment_type','record.patient')->findOrFail($id);
        $treatmenttypeE = TreatmentType::all();
        $recordE = Record::with('patient')->get();
        return view('Treatment.edit', compact('treatmentE','treatmenttypeE','recordE'));
    }
    public function update(TreatmentRequest $request, string $id){
        $treatmentU = Treatment::findOrFail($id);
        $treatmentU->update($request->validated());
        return redirect()->route('treatments.index')->with('success','Tratamiento actualizado');
    }
    public function destroy(string $id){
        $treatmentD = Treatment::findOrFail($id);
        $treatmentD->delete();
        return redirect()->route('treatments.index')->with('success','Tratamiento eliminado');
    }
}
