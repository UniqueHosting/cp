<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;


class DashboardController extends Controller
{
    public function Index()
    {

      $accessToken = json_decode($this->RefreshToken())->access_token;
      $ticketController = new ticketController;
      $data = json_decode($ticketController->FetchAllTickets($accessToken),true);
      return view('dashboard')->with('data',$data);
    }

    public function RefreshToken(){
      return $response = Http::post('https://accounts.zoho.eu/oauth/v2/token?refresh_token=1000.45fa53355b296f5b373df3c5ec0f6c89.9af87fff866b0ba91017a95b05a03f5c&client_id=1000.IFSVQ2PYNU5I4MS4XTV9XB6BNRL89M&client_secret=dbe3f734c184fae4057d2d9c7ee12e8bcc145183bb&scope=Desk.tickets.All&redirect_uri=https://cp.unique-hosting.nl/dashboard&grant_type=refresh_token');
    }
}

// accessToken 1000.3b235a944cca4a8bb214ba9ef863f6fb.88eae883b1dd45e51c66373273f415a8
// refreshToken 1000.45fa53355b296f5b373df3c5ec0f6c89.9af87fff866b0ba91017a95b05a03f5c
