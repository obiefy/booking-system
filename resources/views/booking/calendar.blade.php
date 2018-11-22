@extends('layouts.agent_admin_menu') @section('style')

<link href="{{ asset('css/app.css') }}" rel="stylesheet" />

@endsection @section('main')

<div class="card">
    <div class="card-header bg-default text-light">التقويم</div>
    
    <div class="card-body" id="calendar">
        
    </div>
</div>
@endsection @section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/ar.js') }}"></script>

<script>


let bookings = [];

@foreach($bookings as $booking)
bookings.push({
      title  : "{{ $booking->first_name }}",
      start  : "{{ $booking->date }}",
      allDay : false, // will make the time show
      url: "{{ route('booking.index') }}"
    });
@endforeach
$('#calendar').fullCalendar({
 
    events: bookings,
    locale: 'AR'

});

</script>


@endsection
