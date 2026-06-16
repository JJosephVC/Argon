<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreatmentRequest;
use App\Models\Record;
use App\Models\Treatment;
use App\Models\Treatment_type;
use App\Models\TreatmentType;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index(){
        $treatmentI = Treatment::with('treatment_type:name','record')->get();
        return view('Treatment.index', compact('treatmentI'));
    }
    public function create(){
        $treatmentC = new Treatment();
        $treatmenttypeC = TreatmentType::all();
        $recordC = Record::all();
        return view('Record.create', compact('treatmentC','treatmenttypeC','recordC'));
    }
    public function store(TreatmentRequest $request){
        Treatment::create($request->validated());
        return redirect()->route('treatments.index')->with('success','Tratamiento creado');
    }
    public function show(string $id){
        $treatmentS = Treatment::with('treatment_type','record')->findOrFail($id);
        return view('Treatment.show', compact('treatmentS'));
    }
    public function edit(string $id){
        $treatmentE = Treatment::findOrFail($id);
        $treatmenttypeE = TreatmentType::all();
        $recordE = Record::all();
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
