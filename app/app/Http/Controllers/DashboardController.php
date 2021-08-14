<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;
use App\Models\ZohoToken;
Use \Carbon\Carbon;




class DashboardController extends Controller
{
    public function Index()
    {
      $currentAccessToken = $this->CheckIfTokenIsExpired();

      $ticketController = new ticketController;
      $fetchedTickets = $ticketController->FetchAllTickets($currentAccessToken);

      $data = (object) [
      'fetchedTickets' => $fetchedTickets
      ];

      return view('dashboard')->with('data',$data);
    }


    public function CheckIfTokenIsExpired(){

      $currentTokenentity = ZohoToken::first();
      $currentAccessToken = $currentTokenentity->access_token;
      $tokenLastUpdatedTime = $currentTokenentity->updated_at;
      $diff_in_minutes = $tokenLastUpdatedTime->diffInMinutes(Carbon::now()->toDateTimeString());

      if($diff_in_minutes > 55){
        $newAccessToken = $this->GetNewToken($currentTokenentity->refresh_token);
        $currentTokenentity->access_token = strval($newAccessToken);
        $currentTokenentity->save();
        $currentAccessToken = $currentTokenentity->access_token;
      }

      return $currentAccessToken;
    }

    public function GetNewToken($refreshToken){
      $response = Http::post('https://accounts.zoho.eu/oauth/v2/token?refresh_token='. $refreshToken .'&client_id=1000.IFSVQ2PYNU5I4MS4XTV9XB6BNRL89M&client_secret=dbe3f734c184fae4057d2d9c7ee12e8bcc145183bb&scope=Desk.tickets.All&redirect_uri=https://cp.unique-hosting.nl/dashboard&grant_type=refresh_token');
      return json_decode($response)->access_token;
    }

}
