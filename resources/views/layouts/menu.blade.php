@extends('layouts.app')
@section('content')
<div class="row justify-content-center pb-5">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item bg-dark text-light">
                لوحة التحكم
            </li>
            <li class="list-group-item">
                <a href="{{ route('agent.create') }}" class="">
                    اضافة صالة
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('agent.index') }}" class="">
                    عرض الصالات
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
        

        @yield('main')
        
    </div>
</div>
@endsection
