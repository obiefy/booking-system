@extends('layouts.app') @section('content')

<!-- Page content -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-transparent pb-5">
                    <div class="text-muted text-center mt-2 mb-3">
                        <strong>تسجيل دخول</strong>
                    </div>
                </div>
                <div class="card-body">
                    <form
                        role="form"
                        method="POST"
                        action="{{ route('login') }}"
                    >
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="ni ni-email-83"></i
                                    ></span>
                                </div>
                                <input
                                    class="form-control"
                                    placeholder="البريد الإلكتروني"
                                    type="email"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="ni ni-lock-circle-open"></i
                                    ></span>
                                </div>
                                <input
                                    class="form-control"
                                    placeholder="كلمة المرور"
                                    type="password"
                                />
                            </div>
                        </div>
                        <div
                            class="custom-control custom-control-alternative custom-checkbox"
                        >
                            <input
                                class="custom-control-input"
                                id=" customCheckLogin"
                                type="checkbox"
                            />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">
                                تسجيل الدخول
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <a href="#" class="text-light"
                        ><small>ينسيت كلمة المرور؟</small></a
                    >
                </div>
                <div class="col-6 text-right">
                    <a href="#" class="text-light"
                        ><small>انشاء حساب جديد</small></a
                    >
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
