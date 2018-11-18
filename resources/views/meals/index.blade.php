@extends('layouts.agent_admin_menu') @section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col"><h3 class="mb-0">الوجبات</h3></div>
            <div class="col text-right">
                <a
                    data-toggle="modal"
                    data-target="#create-meal"
                    class="btn btn-sm btn-primary"
                    >اضافة وجبة جديدة</a
                >
                @include('components.meals.create_meal_form', ["title" => "اضافة وجبة جديدة", "modal_id" => "create-meal",
"url" => route('meal.store'), "method" => "POST"]) 
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">الوجبة</th>
                    <th scope="col">السعر</th>
                    <th scope="col">نوعها</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meals as $meal)
                <tr>
                    <td>{{ $meal->id }}</td>
                    <td>{{ $meal->title }}</td>
                    <td>{{ $meal->price }}</td>
                    <td>{{ App\Option::get_name($meal->type) }}</td>

                    <td>
                        <a
                            class="btn btn-default btn-sm"
                            data-toggle="modal"
                            data-target="#update-meal-{{ $meal->id }}"
                            >تعديل</a
                        >

                        @include('components.meals.update_meal_form', ["title" => "تعديل السعر", "modal_id" => "update-meal-".$meal->id,
"url" => route('meal.update', $meal), "method" => "PUT"]) 

                        <a
                            href=""
                            class="btn btn-danger bg-danger btn-sm"
                            data-toggle="modal"
                            data-target="#delete-meal-{{ $meal->id }}"
                            >حذف</a
                        >

                         @include('layouts.modal', ["title" => "هل انت متأكد من جذف الوجية", "modal_id" => "delete-meal-".$meal->id,
"url" => route('meal.destroy', $meal), "method" => "DELETE"]) 

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
