<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;

class TicketController extends Controller
{
    public function FetchAllTickets($accessToken){

      $response = Http::withHeaders([
        'orgId' => '20078274006',
        'Authorization' => 'Zoho-oauthtoken '. $accessToken
      ])->get('https://desk.zoho.eu/api/v1/tickets',['include' => 'contacts,assignee,departments,team,isRead']);

      return $response;
    }
}
