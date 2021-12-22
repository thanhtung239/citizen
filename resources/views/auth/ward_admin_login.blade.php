@extends('layouts.login')

@section('content')
    <div class="admin-login container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company-info">
                <span class="company-logo"><i class="fas fa-sign-in-alt"></i></span>
            </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login-form ">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center mr-0 ml-0">
                    <div class="title">Ward Admin Login</div>
                </div>
                <div class="row w-100 mr-0 ml-0">
                    <form action=" {{ route('ward_admin.login') }} " class="form-group w-100" method="POST">
                        @csrf
                        <div class="row">
                            <input type="text" name="username" id="username" class="form-input" placeholder="Username">
                        </div>
                        <div class="row">
                            <input type="password" name="password" id="password" class="form-input" placeholder="Password">
                        </div>
                        <div class="row">
                            <input type="checkbox" name="remember_me" id="remember_me" class="check-box">
                            <label for="remember_me" class="remember-me ml-2">Remember Me!</label>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <input type="submit" value="Submit" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
