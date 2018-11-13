@extends('layouts.menu')
@section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">الصالات</h3>
            </div>
            <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">اضافة صالة جديدة</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">اسم الصالة</th>
                    <th scope="col">نوعها</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">المحلية</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agents as $agent)
                <tr>
                    <th scope="row">
                        {{ $agent->name }}
                    </th>
                    <td>
                        @agent_show_type_label([$agent])
                    </td>
                    <td>
                        {{ $agent->phone }}
                    </td>
                    <td>
                        <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                    </td>
                    <td>
                        <a href="" class="btn btn-default btn-sm">تعديل</a>
                        <a href="" class="btn btn-danger bg-danger btn-sm">حذف</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
