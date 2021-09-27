<x-app-layout>

  <div class="breadcrumbbar">
    <div class="row align-items-center">
      <div class="col-md-8 col-lg-8">
        <!-- <h4 class="page-title">Control Panel</h4> -->
        <div class="breadcrumb-list">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Control Panel</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ticket</li>
          </ol>
        </div>
      </div>
      <!-- <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
      <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add something</button>
    </div>
  </div> -->
</div>
</div>

<div class="contentbar">
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-7">
              <h5 class="card-title mb-0">#{{$data->tickets['ticketNumber']}} - {{$data->tickets['subject']}}</h5>
            </div>
            <div class="col-5 text-right">
              <span class="badge badge-success-inverse" style="font-size:18px">{{$data->tickets['status']}}</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="description">
            <div class="card-body">
              <div class="row">
                <div class="">
                  <div class="col-md-10">
                    <p>{!! $data->tickets['description'] !!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @for ($i = count($data->threads) - 1; $i >= 0; $i--)
          @if( $data->threads[$i]['channel'] != "WEB")
          <div class="response">
            <hr>
            <div class="card-body">
              <div class="row d-flex justify-content-between m-b-30">
                <div style="padding: 0px 10px">
                  <div class="media">
                    @if($data->threads[$i]['fromEmailAddress'] == "Ryan van Brunschot<client@unique-hosting.nl>")
                    <img class="align-self-center mr-3" src="{{URL::asset('assets/images/users/men.svg')}}" alt="Generic placeholder image">
                    <div class="media-body">
                      <h6 class="mt-0">{{ Auth::user()->name }}</h6>
                      <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                    </div>
                    @else
                    <img class="align-self-center mr-3" src="{{URL::asset('assets/images/users/men.svg')}}" alt="Generic placeholder image">
                    <div class="media-body">
                      <h6 class="mt-0">{{$data->threads[$i]['author']['name']}}</h6>
                      <p class="text-muted mb-0">{{$data->threads[$i]['author']['email']}}</p>
                    </div>
                    @endif
                  </div>
                </div>
                <div style="padding: 0px 10px">
                  <div class="open-email-head">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">{{ date('d-m-Y H:i', strtotime($data->threads[$i]['createdTime'])) }}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div style="color:black ">
                  <div class="">
                    <?php
                    $text = $data->threads[$i]['content'];
                    $output = \App\Http\Controllers\TicketController::delete_all_between('Info-Section', 'End-Section', $text);
                     ?>
                    <div>{!! $output !!}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endfor
          <div class="card-body" style="background-color: #f7f7f7; border-radius: 16px; border: 2px solid #e8e8e8;">
          <!-- <p class="mt-2 text-muted">Ticket Status Is <strong>{{$data->tickets['status']}}</strong></p> -->
          <p class="mt-2 text-muted">Status wijzigen ?</p>

          <form action="{{route('ticket.sendThread')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data->tickets['id']}}">
            <select class="select2-single form-control select2-hidden-accessible" name="status" data-select2-id="1" tabindex="-1" aria-hidden="true" style="width:10%" id="stateSelector" onchange="ChangeButtonState()">
              @if($data->tickets['status'] == "Open")
              <option value="Open" data-select2-id="1">Open</option>
              <option value="Afgerond" data-select2-id="2">Afgrond</option>
              @else
              <option value="Afgerond" data-select2-id="1">Afgrond</option>
              <option value="Open" data-select2-id="2">Open</option>
              @endif
            </select>
            <div class="textarea" id="threadTextArea" style="display:none;">
              <hr>
              <input class="form-control mb-1" type="text" name="name" placeholder="Naam" readonly  style="width:300px" value="{{$data->tickets['contact']['firstName']}} {{$data->tickets['contact']['lastName']}}">
              <input class="form-control mb-3" type="email" name="email" placeholder="Email" readonly style="width:300px" value="{{$data->tickets['contact']['email']}}">
              <textarea id="t-input" name="thread" rows="8" cols="80" style="border: 2px solid #e8e8e8;" placeholder="Reactie ..." required></textarea>
              <br>
              <hr>
            </div>
            <input type="submit" id="updateValue" name="updateValue" value="Save" class="btn btn-primary-rgba mt-3 px-5" style="display:none;">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

window.onload = function() {
  ChangeButtonState();
};


function ChangeButtonState() {

  var x = document.getElementById("updateValue");
  var s = document.getElementById("stateSelector");
  var t = document.getElementById("threadTextArea");
  var tinput = document.getElementById("t-input");

  if (s.options[s.selectedIndex].text == "Open") {
    tinput.required = true;
    x.style.display = "block";
    t.style.display = "block";
    x.value = "Sturen";
  }
  else
  {
    tinput.required = false;
    t.style.display = "none";
    x.style.display = "block";
    x.value = "Opslaan";
  }

}

</script>
</x-app-layout>
