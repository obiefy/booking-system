@extends('layouts.menu') @section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col"><h3 class="mb-0">الخدمات</h3></div>
            <div class="col text-right">
                <a
                    data-toggle="modal"
                    data-target="#create-service"
                    class="btn btn-sm btn-primary"
                >اضافة خدمة جديدة</a> @include('components.services.create_service_form', ["title" => "اضافة خدمة جديدة", "modal_id" => "create-service",
"url" => route('service.store'), "method" => "POST"])
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">الخدمة</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>

                    <td>
                        <a
                            class="btn btn-default btn-sm"
                            data-toggle="modal"
                            data-target="#update-service-{{ $service->id }}"
                            >تعديل</a
                        >

                        @include('components.services.update_service_form', ["title" => "تعديل الخدمة", "modal_id" => "update-service-".$service->id,
"url" => route('service.update', $service), "method" => "PUT"]) 

                        <a
                            href=""
                            class="btn btn-danger bg-danger btn-sm"
                            data-toggle="modal"
                            data-target="#delete-service-{{ $service->id }}"
                            >حذف</a
                        >

                         @include('layouts.modal', ["title" => "هل انت متأكد من جذف الخدمة", "modal_id" => "delete-service-".$service->id,
"url" => route('service.destroy', $service), "method" => "DELETE"]) 

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
