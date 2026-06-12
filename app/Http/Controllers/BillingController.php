<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillingRequest;
use App\Models\Billing;
use App\Models\Date;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index(){
        $billingI = Billing::with('date')->get();
        return view("Billing.index",compact("billingI"));
    }

    public function create(){
        $billingC = new Billing();
        $dateC = Date::all();
        return view("Billing.create",compact('billingC','dateC'));
    }
    public function store(BillingRequest $request){
        Billing::create($request->validated());
        return redirect()->route("billings.index")->with("success","Facturación hecha");
    }

    public function show(string $id){
        $billingS = Billing::with('date')->findOrFail($id);
        return view("Billing.show",compact('billingS'));
    }

    public function edit(string $id){
        $billingE = Billing::findOrFail($id);
        $dateE = Date::all();
        return view("Billing.edit",compact('billingE','dateE'));
    }

    public function update(BillingRequest $request, string $id){
        $billingU = Billing::findOrFail($id);
        $billingU->update($request->validated());
        return redirect()->route("billing.index")->with("success","Factura actualizada");
    }

    public function destroy(string $id){
        $billingD = Billing::findOrFail($id);
        $billingD->delete();
        return redirect()->route("billings.destroy")->with("success","Factura eliminada");
    }
}
