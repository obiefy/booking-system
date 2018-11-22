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
                <form action="{{ route('agents.search_name') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="اسم الصالة",
                                required
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
                <div class="card-body">
                    <h3>بحث متقدم</h3>
                    <br>
                    <form action="{{ route('agents.search') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <select name="city" class="form-control" required>
                                <option value="khartoum">الخرطوم</option>
                                <option value="omdurman">أمدرمان</option>
                                <option value="bahri">بحري</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                name="address"
                                class="form-control"
                                placeholder="الوصف"
                            />
                        </div>
                        <div class="form-group">
                                <label>التاريخ</label
                                    >
                                <input
                                    type="date"
                                    name="date"
                                    class="form-control"
                                    placeholder="من"
                                    
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
                                    checked
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
                                    id="venue-control"
                                    name="agent_type"
                                    class="custom-control-input"
                                    value="venue"
                                />
                                <label
                                    class="custom-control-label"
                                    for="venue-control"
                                    >قاعة مؤتمرات</label
                                >
                            </div>
                        </div>

                        <div id="hall-section">
                        

                            <div class="form-group">
                                <div
                                    class="custom-control custom-radio custom-control-inline"
                                >
                                    <input
                                        type="radio"
                                        id="morning"
                                        name="period"
                                        class="custom-control-input"
                                        value="morning"
                                        checked
                                    />
                                    <label
                                        class="custom-control-label"
                                        for="morning"
                                    >
                                    الفترة الصباحية</label
                                    >
                                </div>
                                <div
                                    class="custom-control custom-radio custom-control-inline"
                                >
                                    <input
                                        type="radio"
                                        id="evening"
                                        name="period"
                                        class="custom-control-input"
                                        value="evening"
                                    />
                                    <label
                                        class="custom-control-label"
                                        for="evening"
                                        >الفترة المسائية</label
                                    >
                                </div>
                            </div>


                        </div>

                        <div id="venue-section">
                        

                            <div class="form-group">
                                <label>من</label
                                    >
                                <input
                                    type="time"
                                    name="from"
                                    class="form-control"
                                    placeholder="من"
                                />
                            </div>
                            <div class="form-group">
                                <label>الى</label>
                                <input
                                    type="time"
                                    name="to"
                                    class="form-control"
                                    placeholder="الى"
                                />
                            </div>


                        </div>
                         

                        <div class="form-group">
                            <label for="customRange3">السعر</label>
                            <p id="priceOutput">100</p>
                            <input
                                type="range"
                                name="price"
                                class="custom-range"
                                min="500"
                                max="50000"
                                step="1500"
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
        <div class="col-md-8">@agents(["agents" => $agents])</div>
    </div>
</div>
@endsection

 @section('script')
    <script>
        $("#venue-section").hide();
        $("#hall-section").hide();
        // $("#hall-control").click(function(){
        //     $("#hall-section").show();
        //     $("#venue-section").hide();

        // });
        // $("#venue-control").click(function(){
        //     $("#venue-section").show();
        //     $("#hall-section").hide();
        // });

    </script>
  @endsection