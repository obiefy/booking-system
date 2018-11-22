@extends('layouts.app')

@section('content')
<div class="container">
  
  <div class="card">
    <div class="card-header bg-default text-light">حجز {{ $agent->name }}</div>
    <div class="card-body">
      @if(isset($booking))
          @if($booking->steps == "info")
            @include('booking.meal')
          @elseif($booking->steps == "meal")
            @include('booking.payment')
          @else
            @include('booking.congrats')
          @endif
      @else

        @include('booking.info')
      @endif
    </div>
  </div>
</div>

@endsection

