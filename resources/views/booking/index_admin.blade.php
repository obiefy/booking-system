@extends('layouts.menu')

@section('main')


<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">الحجوزات</h3>
            </div>
            
        </div>
    </div>
    <form action="{{ route('booking.filter') }}" method="POST" class="p-2">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="">الصالة</label>
                <select name="agent" class="form-control">
                    @foreach($agents as $agent)
                        <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="">السنة</label>
                <select name="year" class="form-control">
                    @foreach([2018] as $day)
                        <option value="{{ $day }}">{{ $day }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="">الشهر</label>
                <select name="month" class="form-control">
                    @foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $day)
                        <option value="{{ $day }}">{{ $day }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
            <label for=""></label>
                <button class="btn btn-default btn-block" type="submit">فلتر</button>
            </div>
        </div>
    </form>
    <br>
    <div class="table-responsive">
        <!-- Projects table -->
        @if($bookings->count() > 0)
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">اسم </th>
                    <th scope="col">اسم الصالة</th>
                    <th scope="col">التلكفة الكلية</th>
                    <th scope="col">التاريخ</th>
                    <th scope="col">الحالة</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    
                    
                    <td>
                         {{ $booking->nameas ?? '' }}
                    </td>
                    
                    <td>
                        {{ $booking->agent->name }}
                    </td>
                    <td>
                        {{ $booking->total ?? 0 }}
                    </td>
                    <td>
                        {{ $booking->date }}
                    </td>
                    <td>
                        <span class="badge {{ $booking->status == 1 ? 'badge-info' : 'badge-success'}}">
                            {{ $booking->status == 1 ? 'مكتمل' : 'طلب'}}
                        </span>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        @else 

            <div class="alert alert-warning">
                لا توجد حجوزات حالية
            </div>
        @endif


    </div>
</div>

@endsection