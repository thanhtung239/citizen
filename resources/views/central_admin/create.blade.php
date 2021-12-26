@extends('layouts.central_admin')

@section('content')
    <div class="ward-admin-create">
        <div class="ward-admin-create-title w-100 text-center">Cấp tài khoản cán bộ tỉnh</div>
        <form class="contact-form create-account-form row m-auto" action="{{ route('central_admin.store') }}" method="POST">
            @csrf
            <div class="form-field col-12">
                <input id="email" class="input-text js-input" type="text" name="email" required>
                <label class="label" for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-12">
                <input id="password" class="input-text js-input" type="password" name="password" required>
                <label class="label" for="passsword">Password</label>
            </div>
			<div class="form-field col-12">
                <input id="name" class="input-text js-input" type="text" name="name" required>
                <label class="label" for="name">Họ và tên</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
			<div class="form-field col-12">
                <input id="phone" class="input-text js-input" type="text" phone="phone" required>
                <label class="label" for="name">Số điện thoại</label>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
			<div class="form-field col-12">
                <select id="txtProvince" name="province_id" class="input-text js-input">
                    <option value="">--Chọn tỉnh--</option>
                    @foreach($provinces as $province)
                        <option class="province-id" value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
                <label class="label" for="txtProvince">Tỉnh</label>
                @error('province_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-12 d-flex justify-content-center">
                <input class="submit-btn mr-5" type="submit" value="Đăng ký">
            </div>
        </form>
    </div>
@endsection
