<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentReceived;
use App\Events\ProductPurchased;

class PaymentsController extends Controller
{
    //
    public function create(){
        return view('payments.create');
    }
    public function store(){
        
        request()->user()->notify(new PaymentReceived(1000));
    }
    public function purchase(){
        ProductPurchased::dispatch('toy');
    }
}
