@extends('layouts.agent_admin_menu')

@section('main')


<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">الحجوزات</h3>
            </div>
            
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        @if($bookings->count() > 0)
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">اسم </th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">التلكفة الكلية</th>
                    <th scope="col">الحالة</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    
                    
                    <td>
                         {{ $booking->first_name }}
                    </td>
                    
                    <td>
                        {{ $booking->phone }}
                    </td>
                    <td>
                        {{ $booking->total ?? 0 }}
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