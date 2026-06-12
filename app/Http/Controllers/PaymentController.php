<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Models\Billing;
use App\Models\Payment;
use App\Models\Payment_type;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $paymentI = Payment::with('payment_type:name','billing')->get();
        return view("Payment.index",compact("paymentI"));
    }
    public function create(){
        $paymentC = new Payment();
        $paymenttypeC = new Payment_type();
        $billingC = new Billing();
        return view("Payment.create",compact('paymentC','paymenttypeC','billingC'));
    }
    public function store(PaymentRequest $request){
        Payment::create($request->validated());
        return redirect()->route("payments.index")->with("success","Pago realizado");
    }
    public function show(string $id){
        $paymentS = Payment::with('payment_type','billing')->findOrFail($id);
        return view("Payment.show",compact("paymentS"));
    }
    public function edit(string $id){
        $paymentE = Payment::findOrFail($id);
        $paymenttypeE = Payment_type::all();
        $billingE = Billing::all();
        return view("Payment.edit",compact('paymentE','paymenttypeE','billingE'));
    }
    public function update(PaymentRequest $request, string $id){
        $paymentU = Payment::findOrFail($id);
        $paymentU->update($request->validated());
        return redirect()->route("payments.index")->with("success","Pago actualizado");
    }
    public function destroy(string $id){
        $paymentD = Payment::findOrFail($id);
        $paymentD->delete();
        return redirect()->route("payments.index")->with("success","Pago eliminado");
    }
}
