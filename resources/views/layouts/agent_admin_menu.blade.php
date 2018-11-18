@extends('layouts.app')
@section('content')
<div class="row justify-content-center pb-5">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item bg-dark text-light">
                لوحة التحكم
            </li>
            <li class="list-group-item">
                <a href="{{ route('booking.index') }}" class="">
                    عرض الحجوزات
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('price.index') }}" class="">
                    الأسعار
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('meal.index') }}" class="">
                    الوجبات
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('agent.edit_profile') }}" class="">
                    تعديل البيانات
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('agent.create') }}" class="">
                    s
                </a>
            </li>
        </ul>

    </div>
    <div class="col-md-8">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @yield('main')
        
    </div>
</div>
@endsection
