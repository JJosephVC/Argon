<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patientI = Patient::all();
        return view("Patient.index",compact("patientI"));
    }

    public function create(){
        $patientC = new Patient();
        return view("Patient.create",compact("patientC"));
    }

    public function store(PatientRequest $request){
        Patient::create($request->validated());
        return redirect()->route("patients.index")->with("success","");
    }

    public function show(string $id){
        $patientS = Patient::findOrFail($id);
        return view("Patient.show",compact("patientS"));
    }

    public function edit(string $id){
        $patientE = Patient::findOrFail($id);
        return view("Patient.edit",compact("patientE"));
    }

    public function update(PatientRequest $request, string $id){
        $patientU = Patient::findOrFail($id);
        $patientU->update($request->validated());
        return redirect()->route("patients.index")->with("success","");
    }

    public function destroy(string $id){
        $patientU = Patient::findOrFail($id);
        $patientU->delete();
        return redirect()->route("patients.index")->with("success","");
    }
}
