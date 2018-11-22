<p class="text-center">
    <h2>
        تهانينا 
        {{ $booking->name() }}
        تمت عملية الحجز بنجاع
    </h2>
    <h2>
        يمكنك التواصل عبر الرقم 
        {{ $booking->agent->phone}}
    </h2>


</p>

  <!-- Meal Info -->
  <form action="{{ route('booking.store.review', $booking) }}" method="POST">
      @csrf
    
      <div class="form-group">
        <label for="">تقييم الصالة</label>
        <h1 id="priceOutput">5</h1>
        <input
            type="range"
            name="rating"
            class="custom-range"
            min="1"
            max="5"
            step="1"
            id="customRange3"
            onchange="updatePriceData(this.value);"
        />
    </div>

    <div class="form-group">
        <label for="">انطباعك عن الصالة</label>
        <textarea name="review" id="review" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">متابعة</button>
    </div>
  </div>

  @section('script')
    <script>
        // $("#bank-info").hide();
        $("#bank").click(function(){
            $("#bank-info").show();

        });
        $("#cash").click(function(){
            $("#bank-info").hide();

        });

    </script>
  @endsection