@extends('layouts.agent_admin_menu') @section('main')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-default text-light">
                المعلومات الاساسية
            </div>
            <div class="card-body bg-default">
                <form action="{{ route('agent.update_info') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">الاسم</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ $user->name }}"
                        />
                    </div>

                    <div class="form-group">
                        <label for="">البريد الاكتروني</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ $user->email }}"
                        />
                    </div>

                    <div class="form-group">
                        <label for="">رقم التلفون</label>
                        <input
                            type="text"
                            name="phone"
                            class="form-control"
                            value="{{ $user->phone }}"
                        />
                    </div>

                    <div class="form-group">
                        <label for="" class="label">نوع الصالة</label>
                        <select
                            name="agent_type"
                            id="agent_type"
                            class="form-control form-control-alternative"
                        >
                            @foreach($agent_types as $agent_type)
                            <option value="{{ $agent_type->code }}" {{ $user->agent_type == $agent_type->code ? 'selected' :
                                '' }}>{{ $agent_type->code }}</option
                            >
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">المدينة</label>
                        <select
                            name="city"
                            id="city"
                            class="form-control form-control-alternative"
                        >
                            @foreach($cities as $city)
                            <option value="{{ $city->code }}" {{ $user->city == $city->code ? 'selected' : '' }}>{{ $city->name }}</option
                            >
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="label">وصف عنك</label>
                        <textarea
                            name="about"
                            id="about"
                            rows="5"
                            class="form-control"
                        >
                {{ $user->about }}
                </textarea
                        >
                    </div>

                    <div class="form-group">
                        <label for="" class="label">العنوان</label>
                        <textarea
                            name="address"
                            id="address"
                            rows="5"
                            class="form-control"
                        >
                {{ $user->address }}
                </textarea
                        >
                    </div>

                    <div class="form-group">
                        <button
                            class="btn btn-default btn-block "
                            type="submit"
                        >
                            تعديل البيانات
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-default text-light">معرض الصور</div>
            <div class="card-body">
                <div class="row">
                    @foreach($user->photos as $photo)
                    <div class="col-md-6">
                        <div class="card">
                            <img
                                src="{{ route('photo.get', $photo) }}"
                                alt=""
                                width="100%"
                            />
                            <!-- <div class="card-footer">
                                {{ $photo->title ?? 'لا يوجد وصف'}}
                            </div> -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <h3>اضافة صورة جديدة</h3>
                <form
                    action="{{ route('agent.add_photo') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <input
                                type="file"
                                class="form-control"
                                id="image"
                                name="image"
                            />
                        </div>
                    </div>
                    <button class="btn btn-default btn-block" type="submit">
                        اضافة الصورة
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
