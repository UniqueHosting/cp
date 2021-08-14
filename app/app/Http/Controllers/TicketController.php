<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;
use App\Models\ZohoToken;
use App\Http\Controllers\DashboardController;


class TicketController extends Controller
{

    public function FetchAllTickets($accessToken){

      $response = Http::withHeaders([
        'orgId' => '20078274006',
        'Authorization' => 'Zoho-oauthtoken '. $accessToken
      ])->get('https://desk.zoho.eu/api/v1/tickets',['include' => 'contacts,assignee,departments,team,isRead']);

      $fetchedTickets = json_decode($response,true);

      if(isset($fetchedTickets['data'])){
        $tickets = $fetchedTickets['data'];
      }else{
        $tickets = null;
      }

      return $tickets;
    }

    public function FetchTicketById($accessToken,$id){

      $response = Http::withHeaders([
        'orgId' => '20078274006',
        'Authorization' => 'Zoho-oauthtoken '. $accessToken
      ])->get('https://desk.zoho.eu/api/v1/tickets/' . $id,['include' => 'contacts,assignee,departments,team,isRead']);

      $fetchedTicket = json_decode($response,true);

      if(isset($fetchedTicket)){
        $ticket = $fetchedTicket;
      }else{
        $ticket = null;
      }

      return $ticket;
    }

    public function Show($id){

      $dashbaordController = new DashboardController;
      $currentAccessToken = $dashbaordController->CheckIfTokenIsExpired();

      $data = $this->FetchTicketById($currentAccessToken,$id);
      return view('tickets.show')->with('data',$data);
    }
}
