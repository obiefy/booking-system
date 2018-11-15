@extends('layouts.agent_admin_menu') @section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col"><h3 class="mb-0">الأسعار</h3></div>
            <div class="col text-right">
                <a
                    data-toggle="modal"
                    data-target="#create-price"
                    class="btn btn-sm btn-primary"
                    >اضافة سعر جديد</a
                >
                @include('components.prices.create_price_form', ["title" => "اضافة سعر جديد", "modal_id" => "create-price",
"url" => route('price.store'), "method" => "POST"]) 
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">السعر</th>
                    <th scope="col">تاريخ البداية</th>
                    <th scope="col">تاريخ النهاية</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prices as $price)
                <tr>
                    <td>{{ $price->id }}</td>
                    <td>{{ $price->price }}</td>
                    <td>{{ $price->start_date }}</td>
                    <td>{{ $price->end_date }}</td>

                    <td>
                        <a
                            class="btn btn-default btn-sm"
                            data-toggle="modal"
                            data-target="#update-price-{{ $price->id }}"
                            >تعديل</a
                        >

                        @include('components.prices.update_price_form', ["title" => "تعديل السعر", "modal_id" => "update-price-".$price->id,
"url" => route('price.update', $price), "method" => "PUT"]) 

                        <a
                            href=""
                            class="btn btn-danger bg-danger btn-sm"
                            data-toggle="modal"
                            data-target="#delete-price-{{ $price->id }}"
                            >حذف</a
                        >

                         @include('layouts.modal', ["title" => "هل انت متأكد من جذف السعر", "modal_id" => "delete-price-".$price->id,
"url" => route('price.destroy', $price), "method" => "DELETE"]) 

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
