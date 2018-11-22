  <!-- Meal Info -->

  <form action="{{ route('booking.store.payment', $booking) }}" method="POST">
      @csrf
  <div class="tab">
    <label for=""><strong>مجموع الحساب</strong></label>
    <p>{{ $booking->total }}</p>
    <br>
    <label for=""><strong>طريقة الدفع</strong></label>
        <div class="form-group">
        
            <input type="radio" name="payment" id="cash" value="cash" checked>
            <label for="cash">دفع كاش</label>
        </div>

        <div class="form-group">
            <input type="radio" name="payment" id="bank"  value="bank">
            <label for="bank">دفع بالبطاقة</label>
        
        </div>
        

        <div id="bank-info">
            <div class="form-group">
                <label for="">رقم البطاقة</label>
                <input
                    type="text"
                    name="card"
                    class="form-control"
                    
                />
            </div>
            <!-- <div class="form-group">
                <label for="">تاريخ الانتهاء</label>
                <input
                    type="date"
                    name="expired"
                    class="form-control"    
                />
            </div> -->
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