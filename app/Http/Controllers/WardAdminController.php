<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeopleInformation;
use App\Models\Province;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\District;
use stdClass;
use App\Http\Requests\WardAdminRequest;

class WardAdminController extends Controller
{
    public function dashboard()
    {
        return view('ward_admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $wardId = Auth::guard('ward_admin')->user()->employee_number;
        $people = PeopleInformation::where('ward_admin_id', $wardId)->search($request)->paginate(15);
        return view('ward_admin.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::orderBy('name')->get();
        return view('ward_admin.create', compact('provinces'));
    }

    public function indexDistrict(Request $request)
    {
        $province = Province::findOrFail($request['id']);
        $districts = $province->districts;
        $data = array();
        foreach ($districts as $district) {
            $data[] = $district->name;
            echo "<option value='".$district->id."'>".$district->name."</option>";
        }
    }

    public function indexWard(Request $request)
    {
        $district = District::findOrFail($request['id']);
        $wards = $district->wards;
        // dd($district);
        foreach ($wards as $ward) {
            echo "<option value='".$ward->id."'>".$ward->name."</option>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WardAdminRequest $request)
    {
        // dd($request['name']);
        PeopleInformation::create([
            'province_id' => $request['province_id'],
            'district_id' => $request['district_id'],
            'ward_id' => $request['ward_id'],
            'province_admin_id' => $request['province_id'],
            'district_admin_id' => $request['province_id'] . $request['district_id'],
            'ward_admin_id' => $request['province_id'] . $request['district_id'].$request['ward_id'],
            'identification' => $request['identification'],
            'name' => $request['name'],
            'birthday' => $request['birthday'],
            'gender' => $request['gender'],
            'religion' => $request['religion'],
            'job' => $request['job'],
            'hamlet' => $request['hamlet'],
            'home_town' => $request['address'],
            'edu_level' => $request['academic_level']
        ]);

        return back()->with('success', 'Tạo thành công!');
        
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
        return view('ward_admin.edit', compact('info'));
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
}
