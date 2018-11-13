@extends('layouts.app') @section('content')

<section class="section section-lg bg-success p-5 mb-5">
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

@endsection
