  <!-- General Info -->
  <form action="{{ route('booking.store.info', $agent) }}" method="POST">
      @csrf

  <div class="tab">
    <div class="form-group">
        <label for=""> الاسم رباعي</label>
        <div class="row">
            <div class="col-md-3">
                <input
                    type="text"
                    name="first_name"
                    class="form-control"
                    required

                    value="Obay"
                />
            </div>
            <div class="col-md-3">
                <input
                    type="text"
                    name="second_name"
                    class="form-control"
                    required

                    value="Obay"
                    
                />
            </div>
            <div class="col-md-3">
                <input
                    type="text"
                    name="third_name"
                    class="form-control"
                    required

                    value="Obay"
                />
            </div>
            <div class="col-md-3">
                <input
                    type="text"
                    name="fourth_name"
                    class="form-control"
                    required

                    value="Obay"
                />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">رقم التلفون</label>
        <input
            type="text"
            name="phone"
            class="form-control"
            required

            value="0917815544"
        />
    </div>
    <div class="form-group">
        <label for="">الرقم الوطني</label>
        <input
            type="text"
            name="ssn"
            class="form-control"
            required

            value="12345678912"
        />
    </div>
    <div class="form-group">
        <label for=""> البريد الالكتروني</label>
        <input
            type="email"
            name="email"
            class="form-control"
        />
    </div>

    <div class="form-group">
        <label for=""> ريخ الحجز</label>
        <input
            type="date"
            name="date"
            class="form-control"
        />
    </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">متابعة</button>
    </div>
  </div>

</form>