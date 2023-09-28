<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
           'total'      => 'required',
           'firstName'  => 'required',
           'lastName'   => 'required',
           'email'      => 'required',
           'country'    => 'required',
           'state'      => 'required',
           'city'       => 'required',
           'phone'      => 'required',
           'postalCode' => 'required',
        ]);
        $order = new Order([
            'total'      => $request->total,
            'user_id'    => auth()->user()->id,
            'card'       => json_encode(session('card')),
            'firstName'  => $request->firstName,
            'lastName'   => $request->lastName,
            'email'      => $request->email,
            'country'    => $request->country,
            'state'      => $request->state,
            'city'       => $request->city,
            'phone'      => $request->phone,
            'postalCode' => $request->postalCode,
        ]);
        $order->save();
        return redirect(route('order.index'));
    }

    public function index()
    {
        $user = auth()->user();
        $order =  $user->order->last();
        return view('home.order.index', compact('order'));
    }
}
