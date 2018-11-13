@extends('layouts.app') @section('content')

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    البحث عن القاعات @if(!empty($agents))
                    <span class="pull-left">
                        ( {{$agents->count()}} ) نتيجة
                    </span>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('agents.search') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <select name="city" class="form-control">
                                <option value="">المدينة</option>
                                <option value="khartoum">الخرطوم</option>
                                <option value="omdurman">أمدرمان</option>
                                <option value="bahri">بحري</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="الخرطوم ، امدرمان .."
                            />
                        </div>
                        <div class="form-group">
                            <div
                                class="custom-control custom-radio custom-control-inline"
                            >
                                <input
                                    type="radio"
                                    id="hall-control"
                                    name="agent_type"
                                    class="custom-control-input"
                                    value="hall"
                                />
                                <label
                                    class="custom-control-label"
                                    for="hall-control"
                                >
                                    صالة أعراس</label
                                >
                            </div>
                            <div
                                class="custom-control custom-radio custom-control-inline"
                            >
                                <input
                                    type="radio"
                                    id="conference-control"
                                    name="agent_type"
                                    class="custom-control-input"
                                    value="venue"
                                />
                                <label
                                    class="custom-control-label"
                                    for="conference-control"
                                    >قاعة مؤتمرات</label
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="customRange3">السعر</label>
                            <p id="priceOutput">100</p>
                            <input
                                type="range"
                                name="price"
                                class="custom-range"
                                min="100"
                                max="500"
                                step="100"
                                id="customRange3"
                                onchange="updatePriceData(this.value);"
                            />
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block"
                            >
                                بحث
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            @if(!empty($agents) && $agents->count() > 0)
            <div class="row">
                @foreach($agents as $agent)
                <div class="col-md-6">
                    <div class="card">
                        <img
                            class="card-img-top"
                            src="{{ asset('/img/theme/img-1-1200x1000.jpg') }}"
                            alt="Card image cap"
                        />
                        <div class="card-body">
                            <h5 class="card-title">{{ $agent->name }}</h5>
                            <p class="card-text">{{ $agent->about }}</p>
                            @agent_show_type_label(["agent" => $agent])
                            @agent_show_city_label(["agent" => $agent])
                            @agent_show_price_label(["agent" => $agent])

                            <span
                                class="badge badge-default float-left"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="{{ $agent->address != NULL ? $agent->address : 'لا بوجد عنوان' }}"
                            >
                                عرض العنوان
                            </span>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">حجز</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="alert alert-warning">
                لا توجد نتائج رجاءا قم بعملية البحث
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
