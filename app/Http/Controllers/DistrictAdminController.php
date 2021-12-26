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
use App\Models\DistrictAdmin;

class DistrictAdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::guard('district_admin')->user();
        $today = Carbon::now();
        $today = $today->toDateString();
        $totalRegistedPeople = $user->peopleInformations()->count();
        $totalRegistedPeopleInDay = $user->peopleInformations()->where('created_at', '>=', $today)->count();
        // $user = ProvinceAdmin::findOrFail($userId);
        // $user->peopleInformations();
        $totalMen = $user->peopleInformations()->where('gender', 'Nam')->count();
        $totalWomen = $user->peopleInformations()->where('gender', 'Nu')->count();
        return view('district_admin.dashboard', compact('totalRegistedPeople', 'totalRegistedPeopleInDay', 'totalMen', 'totalWomen'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $districtId = Auth::guard('district_admin')->user()->employee_number;
        $people = PeopleInformation::where('district_admin_id', $districtId)->search($request)->paginate(15);
        return view('district_admin.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('district_admin.create');
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
        return view('district_admin.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $info)
    {

        $people = PeopleInformation::where('id', $info)->first();

        if (isset($request['name'])) {
            $people->name = $request['name'];
        }
        if (isset($request['birthday'])) {
            $people->birthday = $request['birthday'];
        }
        if (isset($request['identification'])) {
            $people->identification = $request['identification'];
        }
        if (isset($request['gender'])) {
            $people->gender = $request['gender'];
        }
        if (isset($request['religion'])) {
            $people->religion = $request['religion'];
        }
        if (isset($request['edu_level'])) {
            $people->edu_level = $request['edu_level'];
        }
        if (isset($request['hamlet'])) {
            $people->hamlet = $request['hamlet'];
        }
        if (isset($request['job'])) {
            $people->job = $request['job'];
        }
        $people->save();

        return redirect()->back()->with('success', 'Cập nhật thành công!');
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
}
