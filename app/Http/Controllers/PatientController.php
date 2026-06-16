<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patientI = Patient::with('record')->get();
        return view("Patient.index",compact("patientI"));
    }

    public function create(){
        $patientC = new Patient();
        return view("Patient.create",compact("patientC"));
    }

    public function store(PatientRequest $request){
        $patient = Patient::create($request->validated());

        $patient->record()->create([
            'opening_date' => now()->toDateString(),
            'general_observations' => null,
        ]);

        return redirect()->route("patients.index")->with("success","Paciente registrado con historial clinico");
    }
    public function edit(string $id){
        $patientE = Patient::findOrFail($id);
        return view("Patient.edit",compact("patientE"));
    }

    public function update(PatientRequest $request, string $id){
        $patientU = Patient::findOrFail($id);
        $patientU->update($request->validated());

        $patientU->record()->firstOrCreate([], [
            'opening_date' => $patientU->created_at?->toDateString() ?? now()->toDateString(),
            'general_observations' => null,
        ]);

        return redirect()->route("patients.index")->with("success","Paciente actualizado");
    }

    public function destroy(string $id){
        $patientU = Patient::findOrFail($id);
        $patientU->delete();
        return redirect()->route("patients.index")->with("success","");
    }
}
