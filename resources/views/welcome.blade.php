@extends('layouts.app') @section('content')

<section class="section section-lg p-5 mb-5">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img
                    src="{{ asset('img/theme/promo-1.png') }}"
                    class="img-fluid floating"
                />
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <div
                        class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5"
                    >
                        <i class="ni ni-settings-gear-65"></i>
                    </div>
                    <h3>Awesome features</h3>
                    <p>
                        The kit comes with three pre-built pages to help you get
                        started faster. You can change the text and images and
                        you're good to go.
                    </p>
                    <ul class="list-unstyled mt-5">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div
                                        class="badge badge-circle badge-success mr-3"
                                    >
                                        <i class="ni ni-settings-gear-65"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0">
                                        Carefully crafted components
                                    </h6>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div
                                        class="badge badge-circle badge-success mr-3"
                                    >
                                        <i class="ni ni-html5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0">Amazing page examples</h6>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div
                                        class="badge badge-circle badge-success mr-3"
                                    >
                                        <i class="ni ni-satisfied"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0">
                                        Super friendly support team
                                    </h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row row-grid">
    <div class="col-lg-4">
        <div class="card card-lift--hover shadow border-0">
            <div class="card-body py-5">
                <div
                    class="icon icon-shape icon-shape-primary rounded-circle mb-4"
                >
                    <i class="ni ni-check-bold"></i>
                </div>
                <h6 class="text-primary text-uppercase">Download Argon</h6>
                <p class="description mt-3">
                    Argon is a great free UI package based on Bootstrap 4 that
                    includes the most important components and features.
                </p>
                <div>
                    <span class="badge badge-pill badge-primary">design</span>
                    <span class="badge badge-pill badge-primary">system</span>
                    <span class="badge badge-pill badge-primary">creative</span>
                </div>
                <a href="#" class="btn btn-primary mt-4">Learn more</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-lift--hover shadow border-0">
            <div class="card-body py-5">
                <div
                    class="icon icon-shape icon-shape-success rounded-circle mb-4"
                >
                    <i class="ni ni-istanbul"></i>
                </div>
                <h6 class="text-success text-uppercase">Build Something</h6>
                <p class="description mt-3">
                    Argon is a great free UI package based on Bootstrap 4 that
                    includes the most important components and features.
                </p>
                <div>
                    <span class="badge badge-pill badge-success">business</span>
                    <span class="badge badge-pill badge-success">vision</span>
                    <span class="badge badge-pill badge-success">success</span>
                </div>
                <a href="#" class="btn btn-success mt-4">Learn more</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-lift--hover shadow border-0">
            <div class="card-body py-5">
                <div
                    class="icon icon-shape icon-shape-warning rounded-circle mb-4"
                >
                    <i class="ni ni-planet"></i>
                </div>
                <h6 class="text-warning text-uppercase">Prepare Launch</h6>
                <p class="description mt-3">
                    Argon is a great free UI package based on Bootstrap 4 that
                    includes the most important components and features.
                </p>
                <div>
                    <span class="badge badge-pill badge-warning"
                        >marketing</span
                    >
                    <span class="badge badge-pill badge-warning">product</span>
                    <span class="badge badge-pill badge-warning">launch</span>
                </div>
                <a href="#" class="btn btn-warning mt-4">Learn more</a>
            </div>
        </div>
    </div>
</div>

<section class="section section-lg">
    <div class="container">
        <div class="row justify-content-center text-center mb-lg">
            <div class="col-lg-8">
                <h2 class="display-3">The amazing Team</h2>
                <p class="lead text-muted">
                    According to the National Oceanic and Atmospheric
                    Administration, Ted, Scambos, NSIDClead scentist, puts the
                    potentially record maximum.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img
                        src="{{ asset('img/theme/team-1-800x800.jpg') }}"
                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                        style="width: 200px;"
                    />
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">Ryan Tompson</span>
                            <small class="h6 text-muted">Web Developer</small>
                        </h5>
                        <div class="mt-3">
                            <a
                                href="#"
                                class="btn btn-warning btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-warning btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-warning btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img
                        src="{{ asset('img/theme/team-2-800x800.jpg') }}"
                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                        style="width: 200px;"
                    />
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">Romina Hadid</span>
                            <small class="h6 text-muted"
                                >Marketing Strategist</small
                            >
                        </h5>
                        <div class="mt-3">
                            <a
                                href="#"
                                class="btn btn-primary btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-primary btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-primary btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img
                        src="{{ asset('img/theme/team-3-800x800.jpg') }}"
                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                        style="width: 200px;"
                    />
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">Alexander Smith</span>
                            <small class="h6 text-muted">UI/UX Designer</small>
                        </h5>
                        <div class="mt-3">
                            <a
                                href="#"
                                class="btn btn-info btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-info btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-info btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img
                        src="{{ asset('img/theme/team-4-800x800.jpg') }}"
                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                        style="width: 200px;"
                    />
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">John Doe</span>
                            <small class="h6 text-muted">Founder and CEO</small>
                        </h5>
                        <div class="mt-3">
                            <a
                                href="#"
                                class="btn btn-success btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-success btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a
                                href="#"
                                class="btn btn-success btn-icon-only rounded-circle"
                            >
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
