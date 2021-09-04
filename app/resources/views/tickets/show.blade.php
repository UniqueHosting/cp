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
          @for ($i = 0; $i < count($data->threads); $i++)
          <div class="response">
            <hr>
            <div class="card-body">
              <div class="row d-flex justify-content-between m-b-30">
                <div style="padding: 0px 10px">
                  <div class="media">
                    <img class="align-self-center mr-3" src="{{URL::asset('assets/images/users/men.svg')}}" alt="Generic placeholder image">
                    <div class="media-body">
                      <h6 class="mt-0">{{$data->threads[$i]['author']['name']}}</h6>
                      <p class="text-muted mb-0">{{$data->threads[$i]['author']['email']}}</p>
                    </div>
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
                  <div class="col-md-10">
                    <p>{{ $data->threads[$i]['summary'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor
          <div class="card-body" style="background-color: #f7f7f7; border-radius: 16px; border: 2px solid #e8e8e8;">
          <p class="mt-2 text-muted">Ticket Status Is <strong>{{$data->tickets['status']}}</strong></p>
          <p class="mt-2 text-muted">Status wijzigen ?</p>

          <select class="select2-single form-control select2-hidden-accessible" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true" style="width:10%" id="stateSelector" onchange="ChangeButtonState()">
            @if($data->tickets['status'] == "Open")
            <option value="Open" data-select2-id="1">Open</option>
            <option value="Afgerond" data-select2-id="2">Afgrond</option>
            @else
            <option value="Afgerond" data-select2-id="1">Afgrond</option>
            <option value="Open" data-select2-id="2">Open</option>
            @endif
          </select>
          <form action="" method="post">
            <div class="textarea" id="threadTextArea" style="display:none;">
              <br>
              <textarea name="name" rows="8" cols="80" style="border: 2px solid #e8e8e8;"></textarea>
              <br>
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

  if (s.options[s.selectedIndex].text == "Open") {
    x.style.display = "block";
    t.style.display = "block";
    x.value = "Sturen";
  }
  else
  {
    x.value = "Opslaan";
    t.style.display = "none";
    x.style.display = "block";
  }

}

</script>
</x-app-layout>
