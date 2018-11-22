<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>حجز الصالات</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <!--
            <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
            <link
                href="https://fonts.googleapis.com/css?family=Nunito"
                rel="stylesheet"
                type="text/css"
            />
        -->

        <!-- Icons -->

        <link
            href="{{ asset('vendor/nucleo/css/nucleo.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}"
            rel="stylesheet"
        />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/argon.css') }}" rel="stylesheet" />
            <link href="{{ asset('css/argon-rtl.css') }}" rel="stylesheet" />
            <!-- Fullcalendar -->
            <link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

        @yield('style')
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark bg-default">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        حجز الصالات
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto"></ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a
                                    class="btn btn-neutral btn-icon "
                                    href="{{ route('agents.show_all') }}"
                                    >عرض الصالات</a
                                >
                            </li>
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a
                                    class="btn btn-neutral btn-icon mr-1"
                                    href="{{ route('login') }}"
                                    >تسجيل دخول</a
                                >
                            </li>

                            @else

                            <li class="nav-item dropdown">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre
                                >
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdown"
                                >
                                    @if(Auth::user()->is_admin == 1)
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('agent.index') }}"
                                    >
                                        لوحة التحكم
                                    </a>
                                    

                                    @endif

                                    <a
                                        class="dropdown-item"
                                        href="{{ route('booking.index') }}"
                                    >
                                        ادارة الصالة
                                    </a>

                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
                                        تسجبل خروج
                                    </a>

                                    <form
                                        id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        style="display: none;"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="bg-gray pt-5 pb-5">
                <div class="app">
                    <div class="container">
                    @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger" >
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>  

                @yield('content')</div>
            </div>
        </div>

        <footer class="footer bg-default p-5">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        <a
                            href="#"
                            class="font-weight-bold ml-1"
                            target="_blank"
                        >
                            حجز الصالات</a
                        >
                        © 2018
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul
                        class="nav nav-footer justify-content-center justify-content-xl-end"
                    >
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">
                                حجز الصالات</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="#/presentation"
                                class="nav-link"
                                target="_blank"
                                >About Us</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- Core -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
        <!--
            <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
        -->

        <!-- Argon JS -->
        <script src="{{ asset('js/argon.min.js') }}"></script>

        <script src="{{ asset('js/script.js') }}"></script>

        @yield('script')
    </body>
</html>
