@extends('layouts.app') @section('content')

<div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        البحث عن القاعات



                        @if(!empty($halls))
                        <span class="pull-left">
                            ( {{$halls->count()}} )
                            نتيجة

                        </span>
                        @endif
                    </div>
                    <div class="card-body">

                        <form action="{{ url('/hall/search') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="الخرطوم ، امدرمان ..">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="hall-control" name="agent_type" class="custom-control-input"
                                        value="1" checked>
                                    <label class="custom-control-label" for="hall-control"> صالة أعراس</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="conference-control" name="agent_type" class="custom-control-input"
                                        value="2">
                                    <label class="custom-control-label" for="conference-control">قاعة مؤتمرات</label>
                                </div>
                            </div>

                            <!-- for Hall options -->
                            <div class="form-group" id="hall-options">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="am-option" name="am-option" class="custom-control-input"
                                        value="1">
                                    <label class="custom-control-label" for="am-option">صباحا</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="pm-option" name="pm-option" class="custom-control-input"
                                        value="2">
                                    <label class="custom-control-label" for="pm-option">مساءا</label>
                                </div>
                            </div>

                            <!-- for Conference options -->

                            <div class="form-group" id="conference-options">
                                <label id="lb-time"> بداية الزمن: </label>
                                <input type="time" class="form-control" id="in-time" name="start-time" value="06:00"
                                    min="6:00" max="23:00" name="start_time">
                                <label id="lb-time"> نهاية الزمن: </label>
                                <input type="time" class="form-control" id="in-time" name="end-time" value="07:00" min="7:00"
                                    max="24:00" name="end_time">
                            </div>

                            <div class="form-group">
                                <label for="myPrice">
                                    السعر:
                                    <span id="price"></span>

                                </label>
                                <input type="range" min="5000" max="100000" value="100000" class="slider-range" id="myPrice"
                                    name="price" onchange="findPlaces()">
                                <p>
                                </p>

                            </div>
                            <div class="form-group">
                                <label id="lb-date">التاريخ: </label>
                                <input class="form-control" id="in-date" type="date" name="date">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block">
                                    بحث
                                </button>
                            </div>

                        </form>
                    </div>





                </div>
            </div>
            <div class="col-md-8">
                @if(!empty($halls))
                <div class="row">
                    @foreach($halls as $hall)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ asset('/images/conference_rooms-.jpg') }}" alt="Card image cap"
                                height="200">
                            <div class="card-body">
                                <h5 class="card-title">
                                    @if($hall->agent_type == 1)
                                    صالة
                                    @elseif($hall->agent_type == 2)
                                    قاعة
                                    @endif
                                    {{ $hall->name}}</h5>
                                <p class="card-text">
                                    عن الصالة :
                                    {{ $hall->about}}
                                </p>
                                <a href="{{ route('hall.reserve_form', $hall)}}" class="btn btn-danger">حجز</a>
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
