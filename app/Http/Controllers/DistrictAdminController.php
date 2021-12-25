<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeopleInformation;
use App\Models\Province;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
use stdClass;
use App\Http\Requests\WardAdminRequest;

class DistrictAdminController extends Controller
{
    public function dashboard()
    {
        return view('district_admin.dashboard');
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
        return view('district_admin.edit', compact('info'));
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
