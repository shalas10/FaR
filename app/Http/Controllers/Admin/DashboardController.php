<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth::id())
        {
            $usertype=Auth()->user()->usertype;

            // user
            if($usertype=='user')
            {
                return view('dashboard');
            }

            // admin
            else if($usertype=='admin')
            {
                return view('admin.dashboardadmin');
            }
        }
    }
}
