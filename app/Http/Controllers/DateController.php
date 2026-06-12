<?php

namespace App\Http\Controllers;

use App\Http\Requests\DateRequest;
use App\Models\Date;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Treatment_type;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index(){
        $dateI = Date::with('dentist','patient','treatment_type')->get();
        return view("Date.index",compact("dateI"));
    }
    public function create(){
        $dateC = new Date();
        $dentistC = new Dentist();
        $patientC = new Patient();
        $treatmenttypeC = new Treatment_type();
        return view("Date.create",compact('dateC','dentistC','patientC','treatmenttypeC'));
    }
    public function store(DateRequest $request){
        Date::create($request->validated());
        return redirect("dates.index")->with("success","Cita creada exitosamente");
    }
    public function show(string $id){
        $dateI = Date::with('dentist','patient','treatment_type')->findOrFail($id);
        return view("Date.show",compact("dateI"));
    }
    public function edit(string $id){
        $dateE = Date::findOrFail($id);
        $dentistE = Dentist::all();
        $patientE = Patient::all();
        $treatmenttypeE = Treatment_type::all();
        return view("Date.edit",compact('dateE','dentistE','patientE','treatmenttypeE'));
    }
    public function update(DateRequest $request, string $id){
        $dateU = Date::findOrFail($id);
        $dateU->update($request->validated());
        return redirect("dates.index")->with("success","Cita actualizada");
    }
    public function destroy(string $id){
        $dateD = Date::findOrFail($id);
        $dateD->delete();
        return redirect("dates.index")->with("success","Cita eliminada exitosamente");
    }
}
