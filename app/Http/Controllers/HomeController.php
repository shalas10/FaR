<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

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
