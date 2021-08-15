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
              <h5 class="card-title mb-0">Ticket  #{{$data['ticketNumber']}}</h5>
            </div>
            <div class="col-5 text-right">
              <span class="badge badge-success-inverse" style="font-size:18px">{{$data['status']}}</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-6 col-lg-6 col-xl-6 ">
              <div class="order-primary-detail mb-4">
                <h6>Subject</h6>
                <p class="mb-0">{{$data['subject']}}</p>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="order-primary-detail mb-4">
                <h6>Contact Info</h6>

                <p class="mb-0">{{$data['contact']['firstName'] }} {{ $data['contact']['lastName']}}</p>
                @isset($data['contact']['account']['accountName'])
                <p class="mb-0"><strong>{{$data['contact']['account']['accountName']}}</strong></p>
                @endisset

                <p class="mb-0">Phone : {{$data['contact']['phone']}}</p>
                <p class="mb-0">Mobile : {{$data['contact']['mobile']}}</p>
                <p class="mb-0">Email : {{$data['contact']['email']}}</p>

                @isset($data['cf']['cf_website'])
                <p class="mb-0">Website :<a href="{{$data['cf']['cf_website']}}"> {{$data['cf']['cf_website']}}</a></p>
                @endisset

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 ">
              <div class="order-primary-detail mb-0">
                <h5>Description</h5> 
                <p>{!! $data['description'] !!}</p> <br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="order-primary-detail mb-4">
                <h6>Created Time</h6>
                <p class="mb-0">{{ date('d-m-Y H:i', strtotime($data['createdTime'])) }}</p> <br>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <h6>ModifiedTime</h6>
              <p class="mb-0">{{ date('d-m-Y H:i', strtotime($data['modifiedTime'])) }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</x-app-layout>