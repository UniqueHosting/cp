<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;


class DashboardController extends Controller
{
    public function Index()
    {
      // $response = Http::get('https://accounts.zoho.com/oauth/v2/auth', [
      //   'response_type' => 'code',
      //   'client_id' => '1000.2PP77GJTE1DVGYGZQGQ6QVK59I6V3Y',
      //   'scope' => 'Desk.tickets.ALL',
      //   'redirect_uri' => redirect()->route('dashboard')
      // ]);
      // $data = var_dump($response);
      return view('dashboard');
    }
}
