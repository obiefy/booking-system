@extends('layouts.app') @section('content')

<section class="section section-lg">
    <div class="container">
        <h1>
            مرحبا بك في نظام حجز الصالات
        </h1>
        <br>
        <br>
        <br>
        <h1 class="text-light text-center">
            الصالات المتوفرة
        </h1>


        <br>
        <br>
        <br>

        <div class="row">
            @foreach($agents as $agent)
            <div class="col-md-4">
                <div class=" card-lift--hover">
                    @agent(["agent" => $agent])
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- contact Us section -->

<section class="section section-lg pt-lg-0 section-contact-us">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="card bg-gradient-secondary shadow">
                    <div class="card-body p-lg-5">
                        <h4 class="mb-1">يمكنك التواصل معنا </h4>
                        <form action="{{ route('message.store') }}" method="POST">
                        @csrf
                        <div class="form-group mt-5">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="ni ni-user-run"></i
                                    ></span>
                                </div>
                                <input
                                    class="form-control"
                                    placeholder="اسمك"
                                    type="text"
                                    name="name"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="ni ni-email-83"></i
                                    ></span>
                                </div>
                                <input
                                    class="form-control"
                                    placeholder="البريد الالكتروني"
                                    type="email"
                                    name="email"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <textarea
                                class="form-control form-control-alternative"
                                name="message"
                                rows="4"
                                cols="80"
                                placeholder="محتوى الرسالة"
                                required
                            ></textarea>
                        </div>
                        <div>
                            <button
                                type="submit"
                                class="btn btn-default btn-round btn-block btn-lg"
                            >
                            ارسال
                            </button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
