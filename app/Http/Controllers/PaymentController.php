<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use shopid\zarinPal;

class PaymentController extends Controller
{
    public function zarinpalpay(Order $order)
    {
        $zarinpal = zarinpal()
            ->amount($order->total)
            ->callback('http://127.0.0.1:8000/zarinpal/callback')
            ->description('توضیحات تراکنش')
            ->email($order->email)
            ->mobile($order->phone)
            ->send();

        if(! $zarinpal->success()){
            return $zarinpal->error()->message();
        }
        $authority = $zarinpal->authority();

        return $zarinpal->redirect();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
