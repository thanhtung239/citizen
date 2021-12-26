@extends('layouts.central_admin')

@section('content')
    <div class="ward-admin-create">
        <div class="ward-admin-create-title w-100 text-center">Chỉnh sửa thông tin</div>
        <form class="contact-form row" action="{{ route('central_admin.update', [$info->id])}}" method="POST">
            <div class="form-field col-md-3 col-6">
                <input id="name" class="input-text js-input" type="text" value="{{ $info->name }}" required>
                <label class="label" for="name">Họ và tên</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="birthday" class="input-text js-input" type="date" name="birthday" required>
                <label class="label" for="birthday">Ngày sinh</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <select class="input-text js-input" id="gender" name="gender" value="{{ $info->gender }}" required>
                    <option value="{{ $info->gender }}">{{ $info->gender }}</option>
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
                <label class="label" for="gender">Giới tính</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="phone" class="input-text js-input" type="tel"value="{{ $info->identification }}" required>
                <label class="label" for="phone">Chứng minh nhân dân/Căn cước công dân</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->religion == null? 'Không' : $info->religion }}" required>
                <label class="label" for="message">Tôn giáo</label>
            </div>
            <div class="form-field col-md-2 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->job }}" required>
                <label class="label" for="message">Nghề nghiệp</label>
            </div>
            <div class="form-field col-md-2 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->edu_level }}" required>
                <label class="label" for="message">Trình độ học vấn</label>
            </div>
            <div class="form-field col-md-5 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->people_resident }}" disabled>
                <label class="label" for="message">Nơi ở hiện tại</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <select id="txtProvince" name="province_id" class="input-text js-input">
                    <option value="">--{{ $info->province_of_people}}--</option>
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
                    <option value="">--{{ $info->district_of_people}}--</option>
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
                    <option value="">--{{ $info->ward_of_people}}--</option>
                </select>
                <label class="label" for="txtWard">Xã/Phường</label>
                @error('ward_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->hamlet }}" required>
                <label class="label" for="message">Thôn/Xóm/Tổ dân phố</label>
            </div>
            <div class="form-field col-12 d-flex justify-content-end">
                <input class="submit-btn mr-5" type="submit" value="Xác nhận">
            </div>
        </form>
    </div>
@endsection
