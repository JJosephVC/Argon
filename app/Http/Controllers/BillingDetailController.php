<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillingDetailRequest;
use App\Models\Billing;
use App\Models\Billing_detail;
use App\Models\Treatment_type;
use Illuminate\Http\Request;

class BillingDetailController extends Controller
{
    public function index(){
        $billingI = Billing::with('billing')->get();
        $treatmenttypeI = Treatment_type::with('treatment')->get();
        return view("Billing_detail.index",compact('billingI','treatmenttypeI'));
    }
    public function create(){
        $billingdetailC = new Billing_detail();
        $billingC = new Billing();
        $treatmenttypeC = new Treatment_type();
        return view("Billing_detail.create",compact('billingdetailC','billingC','treatmenttypeC'));
    }
    public function store(BillingDetailRequest $request){
        Billing_detail::create($request->validated());
        return redirect()->route("billingsdetails.index")->with("success","Detalles añadidos");
    }
    public function show(string $id){
        $billingdetailS = Billing_detail::with('billing','treatment_type')->findOrFail($id);
        return view("Billing_detail.show",compact("billingdetailS"));
    }
    public function edit(string $id){
        $billingdetailE = Billing_detail::findOrFail($id);
        $billingE = Billing::all();
        $treatmenttypeE = Treatment_type::all();
        return view("Billing_detail.edit",compact('billingdetailE','billingE','treatmenttypeE'));
    }
    public function update(BillingDetailRequest $request, string $id){
        $billingdetailU = Billing_detail::findOrFail($id);
        $billingdetailU->update($request->validated());
        return redirect()->route("billingsdetails.index")->with("success","Detalles actualizados con éxito");
    }
    public function destroy(string $id){
        $billingdetailD = Billing_detail::findOrFail($id);
        $billingdetailD->delete();
        return redirect()->route("billingsdetails.index")->with("success","Detalles eliminados");
    }
}
