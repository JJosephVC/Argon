<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordRequest;
use App\Models\Patient;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(){
        $recordI = Record::with('patient')->get();
        return view("Record.index",compact("recordI"));
    }
    public function create(){
        $recordC = new Record();
        $patientC = Patient::all();
        return view('Record.create',compact('recordC','patientC'));
    }
    public function store(RecordRequest $request){
        Record::create($request->validated());
        return redirect()->route('records.index')->with('success','Historial creado');
    }
    public function show(string $id){
        $recordS = Record::with('patient')->findOrFail($id);
        return view('Record.show',compact('recordS'));
    }
    public function edit(string $id){
        $recordE = Record::with('patient')->findOrFail($id);
        $patientE = Patient::all();
        return view('Record.edit',compact('recordE','patientE'));
    }
    public function update(RecordRequest $request, string $id){
        $recordU = Record::findOrFail($id);
        $recordU->update($request->validated());
        return redirect()->route('records.index')->with('success','Historial actualiazdo');
    }
    public function destroy(string $id){
        $recordD = Record::findOrFail($id);
        $recordD->delete();
        return redirect()->route('records.index')->with('success','Historial eliminado');
    }
}
