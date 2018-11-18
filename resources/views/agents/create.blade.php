@extends('layouts.menu') @section('main')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-default text-light">
                المعلومات الاساسية
            </div>
            <div class="card-body">
                <form action="{{ route('agent.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">الاسم</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            
                        />
                    </div>

                    <div class="form-group">
                        <label for="">البريد الاكتروني</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <label for="">كلمة المرور</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <label for="">رقم التلفون</label>
                        <input
                            type="text"
                            name="phone"
                            class="form-control"
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
                            <option value="{{ $agent_type->code }}" >{{ $agent_type->name }}</option
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
                            <option value="{{ $city->code }}" >{{ $city->name }}</option
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
                </textarea
                        >
                    </div>

                    <div class="form-group">
                        <button
                            class="btn btn-default btn-block "
                            type="submit"
                        >
                        اضافة
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>

@endsection
