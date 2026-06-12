<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentTypeRequest;
use App\Models\Payment_type;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    public function index(){
        $paymenttypeI = Payment_type::all();
        return view("Payment_type.index",compact("paymenttypeI"));
    }

    public function create(){
        $paymenttypeC = new Payment_type();
        return view("Payment_type.create",compact("paymenttypeC"));
    }
    public function store(PaymentTypeRequest $request){
        Payment_type::create($request->validated());
        return redirect()->route("paymentstypes.index")->with("success","Método de pago creado");
    }

    public function show(string $id){
        $paymenttypeS = Payment_type::findOrFail($id);
        return view("Payment_type.show",compact("paymenttypeS"));
    }

    public function edit(string $id){
        $paymenttypeE = Payment_type::findOrFail($id);
        return view("Payment_type.edit",compact("paymenttypeE"));
    }

    public function update(PaymentTypeRequest $request, string $id){
        $paymenttypeU = Payment_type::findOrFail($id);
        $paymenttypeU->update($request->validated());
        return redirect()->route("paymentstypes.index")->with("success","Método de pago actualizado");
    }

    public function destroy(string $id){
        $paymenttypeD = Payment_type::findOrFail($id);
        $paymenttypeD->delete();
        return redirect()->route("paymentstypes.index")->with("success","Método eliminado");
    }
}
