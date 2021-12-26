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
use App\Models\ProvinceAdmin;

class ProvinceAdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::guard('province_admin')->user();
        $today = Carbon::now();
        $today = $today->toDateString();
        $totalRegistedPeople = $user->peopleInformations()->count();
        $totalRegistedPeopleInDay = $user->peopleInformations()->where('created_at', '>=', $today)->count();
        
        // $user = ProvinceAdmin::findOrFail($userId);
        // $user->peopleInformations();
        $totalMen = $user->peopleInformations()->where('gender', 'Nam')->count();
        $totalWomen = $user->peopleInformations()->where('gender', 'Nu')->count();
        return view('province_admin.dashboard', compact('totalRegistedPeople', 'totalRegistedPeopleInDay', 'totalMen', 'totalWomen'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $provinceId = Auth::guard('province_admin')->user()->employee_number;
        $people = PeopleInformation::where('province_admin_id', $provinceId)->search($request)->paginate(15);
        return view('province_admin.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('province_admin.edit', compact('info'));
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

    // public function approveDistrict()
    // {
    //     if (DIstrictAdmin::all()->count() == 0) {
    //         return "404";
    //     } else {
    //         if (DistrAdmin::where('approval_status', 1)->count() == 0) {
    //             ProvinceAdmin::where('approval_status', 0)->update(['approval_status' => 1]);
    //             DistrictAdmin::where('approval_status', 0)->update(['approval_status' => 1]);
    //         } else {
    //             ProvinceAdmin::where('approval_status', 1)->update(['approval_status' => 0]);
    //             DistrictAdmin::where('approval_status', 1)->update(['approval_status' => 0]);
    //         }
    //     }
    //     // dd(ProvinceAdmin::where('approval_status', 1)->count());
    // }
}
