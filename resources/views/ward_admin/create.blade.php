@extends('layouts.ward_admin')
@section('content')
    <div class="ward-admin-create">
        <div class="ward-admin-create-title w-100 text-center">Khai báo thông tin</div>
        <form class="contact-form row" method="post" action="{{ route('ward_admin.store') }}">
            @csrf
            <div class="form-field col-md-3 col-6">
                <input id="name" name="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Họ và tên</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="birthday" name="birthday" class="input-text js-input" type="date" required>
                <label class="label" for="birthday">Ngày sinh</label>
                @error('birthday')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <select name="gender" class="input-text js-input" id="gender" required>
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
                <label class="label" for="gender">Giới tính</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input name="identification" id="identification" class="input-text js-input" type="tel" required>
                <label class="label" for="identification">Chứng minh nhân dân/Căn cước công dân</label>
                @error('identification')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="religion" id="religion" class="input-text js-input" type="text" required>
                <label class="label" for="message">Tôn giáo</label>
                @error('religion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-2 col-6">
                <input id="job" name="job" class="input-text js-input" type="text" required>
                <label class="label" for="message">Nghề nghiệp</label>
                @error('job')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-2 col-6">
                <input id="academicLevel" name="academic_level" class="input-text js-input" type="text" required>
                <label class="label" for="academicLevel">Trình độ học vấn</label>
                @error('academic_level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-5 col-6">
                <input id="address" name="address" class="input-text js-input" type="text" required>
                <label class="label" for="address">Nơi ở hiện tại</label>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <!-- <input id="message" class="input-text js-input" placeholder="Thái Bình" type="text" required> -->
                <select id="txtProvince" name="province_id" class="input-text js-input">
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
            <div class="form-field col-md-3 col-6">
                <!-- <input id="txtDistrict" class="input-text js-input" type="text" required> -->
                <select id="txtDistrict" name="district_id" class="input-text js-input">
                    <option value="">----</option>
                </select>
                <label class="label" for="txtDistrict">Quận/Huyện</label>
                @error('district_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <!-- <input id="txtWard" class="input-text js-input" type="text" required> -->
                <select id="txtWard" name="ward_id" class="input-text js-input">
                    <option value="">----</option>
                </select>
                <label class="label" for="txtWard">Xã/Phường</label>
                @error('ward_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="hamlet" name="hamlet" class="input-text js-input" type="text" required>
                <label class="label" for="hamlet">Thôn/Xóm/Tổ dân phố</label>
                @error('hamlet')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-field col-12 d-flex justify-content-end">
                <input class="submit-btn mr-5" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
