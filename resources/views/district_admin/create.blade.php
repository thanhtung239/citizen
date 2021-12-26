@extends('layouts.district_admin')

@section('content')
    <div class="ward-admin-create">
        <div class="ward-admin-create-title w-100 text-center">Cấp tài khoản cán bộ xã</div>
        <form class="contact-form create-account-form row m-auto">
            <div class="form-field col-12">
                <input id="email" class="input-text js-input" type="text" required>
                <label class="label" for="name">Email</label>
            </div>
            <div class="form-field col-12">
                <input id="password" class="input-text js-input" type="password" required>
                <label class="label" for="email">Password</label>
            </div>
			<div class="form-field col-12">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Họ và tên</label>
            </div>
			<div class="form-field col-12">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Số điện thoại</label>
            </div>
			<div class="form-field col-12">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Mã nhân viên</label>
            </div>
            <div class="form-field col-12 d-flex justify-content-center">
                <input class="submit-btn mr-5" type="submit" value="Đăng ký">
            </div>
        </form>
    </div>
@endsection
