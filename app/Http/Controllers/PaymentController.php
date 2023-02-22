<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        return view('account.payment.index', [
            'payment' => Payment::where('UserID', $id)->with('user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        $id = auth()->user()->id;

        $rule = [
            'CardNumber' => 'required|string|size:12|unique:payments',
            'ExpiredDate' => 'required|date',
            'CVV' => 'required|string|size:3',
        ];

        $validatedData = $request->validate($rule);

        $validatedData['UserID'] = $id;

        Payment::create($validatedData);

        return redirect('/account/payment')->with('success', 'new payment has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('account.payment.update', [
            'payment' => $payment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        return $payment;

        $id = auth()->user()->id;

        $rule = [
            'ExpiredDate' => 'required|date',
            'CVV' => 'required|string|size:3',
        ];

        if ($request->CardNumber != $payment->CardNumber) {
            $rule['CardNumber'] = 'required|string|size:12|unique:payments';
        }

        $validatedData = $request->validate($rule);

        $validatedData['UserID'] = $id;

        Payment::where('CardNumber', $payment->CardNumber)->update($validatedData);

        return redirect('/account/payment')->with('success', 'payment has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Payment::where('CardNumber', $request->CardNumber)->delete();

        return redirect('account/payment')->with('success', 'payment has been deleted');
    }
}
