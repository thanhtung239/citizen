<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin login') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main>
        <div>
            <nav class="admin-navbar navbar navbar-expand-md d-flex justify-content-end">
                <div class="" id="">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active mr-2">
                        @if (Auth::guard('central_admin')->check())
                            <a class="nav-link {{ Route::currentRouteName() == 'central_admin.dashboard' ? 'active' : '' }}" href="{{ route('central_admin.dashboard') }}">Dashboard</a>
                         @endif
                    </li>
                    <li class="nav-item">
                        @if (Auth::guard('central_admin')->check())
                            <a class="nav-link {{ Route::currentRouteName() == 'central_admin.index' ? 'active' : '' }}" href="{{ route('central_admin.index') }}">Danh sách nhân khẩu</a>
                         @endif
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link navbar-link-element  dropdown-toggle name-of-user" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>      
                            @if (Auth::guard('central_admin')->check())
                                {{ Auth::guard('central_admin')->user()->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown" id="dropdownMenuUser">
                            @if (Auth::guard('central_admin')->check())
                                <form id="logoutForm" action="{{ route('central_admin.logout') }}" method="POST">
                                @csrf
                                <button id="logoutButton" type="submit" class="dropdown-item m-0 text-center">Logout</button>
                                </form>
                            @endif
                        </div>
                    </li>
                    <li class="mr-md-5">
                        <a href=""></a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div>
            @include('components.alert')
        </div>
        @yield('content')
    </main>
</body>
</html>
