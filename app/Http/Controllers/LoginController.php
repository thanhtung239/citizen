<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showAdminLogin()
    {
        return view('auth.admin_login');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showCentralAdminLogin()
    {
        return view('auth.central_admin_login');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showProvinceAdminLogin()
    {
        return view('auth.province_admin_login');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showDistrictAdminLogin()
    {
        return view('auth.district_admin_login');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showWardAdminLogin()
    {
        return view('auth.ward_admin_login');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()
                ->with('error', 'Username or Password are wrong.');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function centralAdminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()
                ->with('error', 'Username or Password are wrong.');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function provinceAdminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()
                ->with('error', 'Username or Password are wrong.');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function districtAdminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()
                ->with('error', 'Username or Password are wrong.');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function wardAdminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (auth()->guard('ward_admin')->attempt([
            'email' => $request['email'],
            'password' => $request['password']
        ])) {
            return redirect()->route('ward_admin.dashboard')->with('success', 'Access successful!');
        } else {
            return redirect()->back()
                ->with('error', 'These credentials do not match our records.');
        }
    }
}
