<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;
use App\Models\ZohoToken;
use App\Http\Controllers\DashboardController;


class UserController extends Controller
{
    public function Show(){

      return view('users.show');

    }
}
