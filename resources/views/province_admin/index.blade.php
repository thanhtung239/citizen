@extends('layouts.province_admin')

@section('content')
    <div class="account-management">
        <div class="container-xl d-flex">
            <form class="management-search mt-5" action="{{ route('province_admin.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-center h-100">
                        <div>
                            <label class="label-search ml-2" for="searchByCMND">Tìm kiếm theo CMND</label>
                            <div class="search-bar d-flex align-items-center">
                                <input id="searchByCMND" class="search-input" type="text" name="search_by_cmnd" placeholder="Search by CMND">
                                <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center h-100">
                        <div>
                            <label class="label-search ml-2" for="searchByName">Tìm kiếm theo tên</label>
                            <div class="search-bar d-flex align-items-center">
                                <input id="searchByName" class="search-input" type="text" name="search_by_name" placeholder="Search by name">
                                <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-end justify-content-center">
                        <button type="submit" class="btn">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="table-responsive mx-auto">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="manage-account">Quản lý nhân khẩu</div>
                        </div>
                    </div>
                </div>

                <div class="table-min-width">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <div class="row">
                                    <th class="check-box"></th>
                                    <th class="column-title text-center p-0 small-column">STT</th>
                                    <th class="column-title text-center p-0">Số CMND/CCCD</th>
                                    <th class="column-title text-center p-0">Họ và tên</th>
                                    <th class="column-title text-center p-0 gender-column">Giới tính</th>
                                    <th class="column-title text-center p-0">Ngày sinh</th>
                                    <th class="column-title text-center p-0">Quận/Huyện</th>
                                    <th class="column-title text-center p-0">Nghề nghiệp</th>
                                    <th class="column-title text-center p-0">Hành động</th>
                                </div>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($people as $key => $peopleInfo)
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td class="row-content text-center">1</td>
                                    <td class="row-content text-center">{{ $peopleInfo->identification }}</td>
                                    <td class="row-content text-center">{{ $peopleInfo->name }}</td>
                                    <td class="row-content text-center">{{ $peopleInfo->gender }}</td>
                                    <td class="row-content text-center">{{ $peopleInfo->birthday }}</td>
                                    <td class="row-content text-center">{{ $peopleInfo->district_of_people }}</td>
                                    <td class="row-content text-center">{{ $peopleInfo->job }}</td>
                                    <td class="row-content text-center">
                                        <a href="{{ route('province_admin.edit', [$peopleInfo->id]) }}" class="edit btn-user"><i class="faws fas fa-pen" data-toggle="tooltip" data-original-title="Edit"></i></a>
                                        <a href="#deleteUserModal" class="delete btn-user" value="{{ $peopleInfo->id }}" data-toggle="modal"><i class="faws fas fa-trash" data-toggle="tooltip" data-original-title="Delete"></i></a>
                                    </td>
                                </tr>

                                <!-- Delete Modal HTML -->
                                <div id="deleteUserModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{route('province_admin.index')}}" method="POST">
                                                @csrf
                                                <div class="modal-header">						
                                                    <div class="modal-title">Delete User</div>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="faws fas fa-times"></i></button>
                                                </div>
                                                <div class="modal-body">					
                                                    <div>Are you sure you want to delete these Records?</div>
                                                    <div class="text-warning"><small>This action cannot be undone.</small></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input hidden="true" name="username_id" class="value-id">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="clearfix d-flex align-items-end">
                    <div class="pagination-custom container mt-5 pr-4 d-flex justify-content-center">
                        {!! $people->appends($_GET)->onEachSide(1)->links() !!}
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
