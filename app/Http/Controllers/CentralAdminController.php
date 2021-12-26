<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeopleInformation;
use App\Models\Province;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
use stdClass;
use App\Http\Requests\WardAdminRequest;
use Carbon\Carbon;
use App\Models\CentralAdmin;
use App\Models\ProvinceAdmin;
use App\Models\DistrictAdmin;

class CentralAdminController extends Controller
{
    public function dashboard()
    {
        $today = Carbon::now();
        $today = $today->toDateString();
        $totalRegistedPeople = PeopleInformation::all()->count();
        $totalRegistedPeopleInDay = PeopleInformation::where('created_at', '>=', $today)->count();
        $totalMen = PeopleInformation::where('gender', 'Nam')->count();
        $totalWomen = PeopleInformation::where('gender', 'Nu')->count();
        if (ProvinceAdmin::where('approval_status', 1)->count() == 0) {
            $status = "Mở chức năng khai báo";
        } else {
            $status = "Đóng chức năng khai báo";
        }
        return view('central_admin.dashboard', compact('totalRegistedPeople', 'totalRegistedPeopleInDay', 'totalMen', 'totalWomen', 'status'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $people = PeopleInformation::search($request)->paginate(15);
        return view('central_admin.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('central_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($peopleId)
    {
        $info = PeopleInformation::where('id', $peopleId)->first();
        $provinces = Province::orderBy('name')->get();
        return view('central_admin.edit', compact('info', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexDistrict(Request $request)
    {
        $province = Province::findOrFail($request['id']);
        $districts = $province->districts;
        $data = array();
        foreach ($districts as $district) {
            $data[] = $district->name;
            echo "<option value='" . $district->id . "'>" . $district->name . "</option>";
        }
    }

    public function indexWard(Request $request)
    {
        $district = District::findOrFail($request['id']);
        $wards = $district->wards;
        foreach ($wards as $ward) {
            echo "<option value='" . $ward->id . "'>" . $ward->name . "</option>";
        }
    }

    public function approveProvince()
    {
        if (ProvinceAdmin::all()->count() == 0) {
            return "404";
        } else {
            if (ProvinceAdmin::where('approval_status', 1)->count() == 0) {
                ProvinceAdmin::where('approval_status', 0)->update(['approval_status' => 1]);
                DistrictAdmin::where('approval_status', 0)->update(['approval_status' => 1]);
                return "Đóng chức năng CRUD";
            } else {
                ProvinceAdmin::where('approval_status', 1)->update(['approval_status' => 0]);
                DistrictAdmin::where('approval_status', 1)->update(['approval_status' => 0]);
                return "Mở chức năng CRUD";
            }
        }
        // dd(ProvinceAdmin::where('approval_status', 1)->count());
    }
}
