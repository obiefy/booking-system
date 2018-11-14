@extends('layouts.agent_admin_menu') @section('main')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col"><h3 class="mb-0">الصالات</h3></div>
            <div class="col text-right">
                <!--
                    <a href="#!" class="btn btn-sm btn-primary">اضافة صالة جديدة</a>
                -->
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">السعر</th>
                    <th scope="col">تاريخ البداية</th>
                    <th scope="col">تاريخ النهاية</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prices as $price)
                <tr>
                    <td>{{ $price->price }}</td>
                    <td>{{ $price->start_date }}</td>
                    <td>{{ $price->end_date }}</td>

                    <td>
                        <a
                            class="btn btn-default btn-sm"
                            data-toggle="modal"
                            data-target="#update_modal"
                            >تعديل</a
                        >
                        <a
                            href=""
                            class="btn btn-danger bg-danger btn-sm"
                            data-toggle="modal"
                            data-target="#delete-modal"
                            >حذف</a
                        >
                    </td>
                </tr>

                <!-- UPDATE Modal -->
                <div
                    class="modal fade"
                    id="update_modal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="update_modalLabel"
                    aria-hidden="true"
                >
                    <div
                        class="modal-dialog modal-dialog-centered"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="update_modalLabel">
                                    اضافة سعر جديد
                                </h5>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="{{ route('price.update', $price) }}"
                                    method="POST"
                                >
                                    @csrf @method('PUT')
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            name="price"
                                            class="form-control"
                                            placeholder="السعر"
                                            value="{{ $price->price }}"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <input
                                            type="date"
                                            name="start_date"
                                            class="form-control"
                                            placeholder="السعر"
                                            value="{{ $price->start_date }}"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <input
                                            type="date"
                                            name="end_date"
                                            class="form-control"
                                            placeholder="السعر"
                                            value="{{ $price->end_date }}"
                                        />
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-dismiss="modal"
                                    >
                                        الغاء
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        حفظ التعديلات
                                    </button>
                                </form>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- DELETE Modal -->
<div
    class="modal fade"
    id="delete-modal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="delete-modal"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-danger modal-dialog-centered modal-sm"
        role="document"
    >
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">هل أنت متأكد من عملية الخذف</h4>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white">حذف</button>
                <button
                    type="button"
                    class="btn btn-link text-white mr-auto"
                    data-dismiss="modal"
                >
                    الغاء
                </button>
            </div>
        </div>
    </div>

    @endsection
</div>
