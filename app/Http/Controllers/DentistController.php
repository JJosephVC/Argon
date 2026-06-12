<?php

namespace App\Http\Controllers;

use App\Http\Requests\DentistRequest;
use App\Models\Dentist;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    public function index(){
        $dentistI = Dentist::all();
        return view("Dentist.index",compact("dentistI"));
    }

    public function create(){
        $dentistC = new Dentist();
        return view("Dentist.create",compact("dentistC"));
    }

    public function store(DentistRequest $request){
        Dentist::create($request->validated());
        return redirect("dentists.index")->with("success","");
    }

    public function show(string $id){
        $dentistS = Dentist::findOrFail($id);
        return view("Dentist.show",compact("dentistS"));
    }

    public function edit(string $id){
        $dentistE = Dentist::findOrFail($id);
        return view("Dentist.edit",compact("dentistE"));
    }

    public function update(DentistRequest $request, string $id){
        $dentistU = Dentist::findOrFail($id);
        $dentistU->update($request->validated());
        return redirect("dentists.index")->with("success","");
    }

    public function destroy(string $id){
        $dentistU = Dentist::findOrFail($id);
        $dentistU->delete();
        return redirect("dentists.index")->with("success","");
    }
}
