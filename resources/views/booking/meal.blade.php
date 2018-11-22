  <!-- Meal Info -->
  <form action="{{ route('booking.store.meal', $booking) }}" method="POST">
      @csrf
  <div class="tab">
    <label for=""><strong>الوجبات</strong></label>
    <div class="row">
      
      @foreach($meals as $meal)
        <div class="col-md-3">
            <div class="card p-2 bg-grey ">
          <label for="meal-{{ $meal->id }}">
              <input type="radio" name="meal" id="meal-{{ $meal->id }}" {{ $loop->first ? 'checked' : ''}} value="{{ $meal->id }}">
              {{ $meal->title }}
              <br>
              <span class="text-center badge {{ $meal->type == 'cocktail' ? 'badge-warning' : 'badge-info' }}">{{ App\Option::get_name($meal->type) }}</span>
              <span class="text-center badge badge-dark">{{ $meal->price }} جنيه</span>
              <span class="text-center badge badge-dark">{{ $meal->discount }} تخفيض</span>
              <br>
              <p>{{ $meal->content }}</p>
          </label>
            </div>
        </div>
      @endforeach

      

      
    </div>

<div class="form-group">
                <label for="">العدد</label>
                <input
                    type="number"
                    name="number"
                    class="form-control"
                    value="10"
                    required
                />
            </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">متابعة</button>
    </div>
  </div>