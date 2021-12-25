@extends('layouts.district_admin')

@section('content')
<!--HEADER-->
    <div class="dashboard mt-5 pb-5">
        <div class="align-items-center row">
            <div class="col-12 col-sm-12 col-md-6 col-xl-3 row1">
                <div class="card text-center pl-3 dash_total" >
                    <div class="card-body">
                        <p class="mb-1 "><b>Tổng số người đã khai báo</b></p>
                        <span id="dash_num1" class="h1 fw-bold">30000</span>
                        <span>Người</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-xl-3 row1">
                <div class="card text-center pl-3 dash_today" >
                    <div class="card-body">
                        <p class="mb-1"><b>Khai báo trong ngày</b></p>
                        <span id="dash_num2" class="h1">1000</span>
                        <span >Người</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-xl-3 row1">
                <div class="card text-center pl-3 dash_male" >
                    <div class="card-body">
                        <p class="mb-1"><b>Tổng số nam</b></p>
                        <span id="dash_num3" class="h1">15000</span>
                        <span>Người</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-xl-3 row1">
                <div class="card text-center pl-3 dash_female" >
                    <div class="card-body">
                        <p class="mb-1"><b>Tổng số nữ</b></p>
                        <span id=dash_num4 class="h1">15000</span>
                        <span>Người</span>
                    </div>
                </div>
            </div>
        </div>
        <!--END HEADER-->

        <!--SEX-CHART AGE-CHART-->
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tỉ lệ Nam và Nữ</h4>
                        <img src="{{ asset('img/white.png') }}" alt="img" class="t">
                        <img src="{{ asset('img/white.png') }}" alt="img" class="h">
                        <div id="MFChart" style="height:400px"></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Thống kê dân số theo độ tuổi</h4>
                        <img src="{{ asset('img/white.png') }}" alt="img" class="t">
                        <img src="{{ asset('img/white.png') }}" alt="img" class="h">
                        <div id="AgeChart" style="height: 400px; width: 100%;"></div>
                        </div>
                    </div>
                    </div>
            </div>            
        </div>

        <!--EDU-CHART PRO-CHART-->
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thống kê theo trình độ văn hóa</h4>
                        <img src="{{ asset('img/white.png') }}" alt="img" class="t">
                        <img src="{{ asset('img/white.png') }}" alt="img" class="h">
                        <div id="EduChart" style="height:400px"></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Tỉ trọng dân số</h4>
                        <img src="{{ asset('img/white.png') }}" alt="img" class="t">
                        <img src="{{ asset('img/white.png') }}" alt="img" class="h">
                        <div id="ProportionChart" style="height: 400px; width: 100%;"></div>
                        </div>
                    </div>
                    </div>
            </div>            
        </div>
    </div>
@endsection
