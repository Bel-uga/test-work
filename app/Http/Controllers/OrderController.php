<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        Order::create($request->all());

        app()->call('App\Http\Controllers\MailController@sendMail', [
            "data" => $request->all()
        ]);

        return response()->json([
            'message' => 'ok'
        ]);
    }

}