@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <ul>
                   @foreach($notifications as $notification)
                   <li>
                   @if($notification->type=='App\Notifications\PaymentReceived')
                   We have received a payment of $ {{$notification->data['amount']}}
                   @endif
                   </li>
                   @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
