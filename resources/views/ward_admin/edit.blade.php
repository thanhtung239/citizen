@extends('layouts.ward_admin')

@section('content')
    <div class="ward-admin-create">
        <div class="ward-admin-create-title w-100 text-center">Chỉnh sửa thông tin</div>
        <form class="contact-form row" action="{{ route('ward_admin.update', [$info->id])}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-field col-md-3 col-6">
                <input id="name" class="input-text js-input" type="text" value="{{ $info->name }}" required>
                <label class="label" for="name">Họ và tên</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="date" class="input-text js-input" name="birthday" type="date" required>
                <label class="label" for="email">Ngày sinh</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <select class="input-text js-input" id="gender" name="gender" required>
                    <option value="{{ $info->gender }}">{{ $info->gender }}</option>
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
                <label class="label" for="gender">Giới tính</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="phone" class="input-text js-input" type="tel" value="{{ $info->identification }}" name="identification" required>
                <label class="label" for="phone">Chứng minh nhân dân/Căn cước công dân</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->religion == null? 'Không' : $info->religion }}" name="religion" required>
                <label class="label" for="message">Tôn giáo</label>
            </div>
            <div class="form-field col-md-2 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->job }}" name="job" required>
                <label class="label" for="message">Nghề nghiệp</label>
            </div>
            <div class="form-field col-md-2 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->edu_level }}" name="edu_level" required>
                <label class="label" for="message">Trình độ học vấn</label>
            </div>
            <div class="form-field col-md-5 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->people_resident }}"  disabled>
                <label class="label" for="message">Nơi ở hiện tại</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" value="{{ $info->province_of_people}}" type="text" disabled>
                <label class="label" for="message">Tỉnh</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->district_of_people }}" disabled>
                <label class="label" for="message">Quận/Huyện</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->ward_of_people}}" disabled>
                <label class="label" for="message">Xã/Phường</label>
            </div>
            <div class="form-field col-md-3 col-6">
                <input id="message" class="input-text js-input" type="text" value="{{ $info->hamlet }}" name="hamlet" required>
                <label class="label" for="message">Thôn/Xóm/Tổ dân phố</label>
            </div>
            <div class="form-field col-12 d-flex justify-content-end">
                <input class="submit-btn mr-5" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
