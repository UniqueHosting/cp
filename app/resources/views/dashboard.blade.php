<x-app-layout>
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
                              <td>{{ $data->fetchedTickets[$i]['ticketNumber']}}</td>
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
</x-app-layout>
