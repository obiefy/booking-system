@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
        <div class="card">
        
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">{{ $agent->name }}</h5>
                        <p class="card-text">{{ $agent->about }}</p>
                        @agent_show_type_label(["agent" => $agent])
                        @agent_show_city_label(["agent" => $agent])
                        @agent_show_price_label(["agent" => $agent])
                        @rating()
                        <br>
                        <br>
                        <strong>الخدمات</strong>
                        <br>
                        @if($agent->services()->count() > 0)
                            @foreach($agent->services as $service)
                            <span class="badge badge-dark">{{ $service->title }}</span>
                            @endforeach
                        @else   

                            <div class="alert alert-light">
                                لا توجد خدمات اضافية
                            </div>
                        @endif
                        <br>
                        <br>

                        <a href="{{ route('booking.show_form', $agent)}}" class="btn btn-primary">حجز</a>
                    </div>
                    <div class="col-md-6">
                        <strong>عن الصالة</strong>
                        <p>{{ $agent->about }}</p>
                        
                        <strong>العنوان</strong>
                        <p>{{ $agent->address }}</p>
                    </div>  
                </div>
            </div>

            <h3>معرض الصور</h3>
            <br>
            @if($agent->photos()->count() > 0)
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($agent->photos as $photo)
                    <div class="carousel-item {{ $loop->first ? 'active' : ''}}">
                        <img class="d-block w-100" src="{{ route('photo.get', $photo) }}" alt="First slide">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @else   

            <div class="alert alert-warning">
                لا توجد صور لعرضها
            </div>
            @endif
            
        </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
@endsection