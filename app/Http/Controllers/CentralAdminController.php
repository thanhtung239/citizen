<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeopleInformation;
use App\Models\Province;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
use stdClass;
use App\Http\Requests\WardAdminRequest;

class CentralAdminController extends Controller
{
    public function dashboard()
    {
        return view('central_admin.dashboard');
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
}
