<x-app-layout>

  <div class="breadcrumbbar">
      <div class="row align-items-center">
          <div class="col-md-8 col-lg-8">
                <!-- <h4 class="page-title">Control Panel</h4> -->
              <div class="breadcrumb-list">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Control Panel</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        @isset($data->fetchedTickets)
        <div class="card m-b-30">
          <div class="card-header">
            <h5 class="card-title">Tickets</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>department</th>
                    <th>Contact Person</th>
                    <th>Subject</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 0; $i < count($data->fetchedTickets); $i++)
                  <tr>
                    <td><a href="{{route('ticket.show', $data->fetchedTickets[$i]['id'])}}">{{ $data->fetchedTickets[$i]['ticketNumber']}}</a></td>
                    <td>{{ $data->fetchedTickets[$i]['department']['name']}}</td>
                    <td>{{ $data->fetchedTickets[$i]['contact']['firstName']}}  {{ $data->fetchedTickets[$i]['contact']['lastName']}}</td>
                    <td>{{ $data->fetchedTickets[$i]['subject']}}</td>
                    <td>{{ $data->fetchedTickets[$i]['status']}}</td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>

          </div>
        </div>
        @endisset
      </div>
    </div>
</div>
</x-app-layout>
