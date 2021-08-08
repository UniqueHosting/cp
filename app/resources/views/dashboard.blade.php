<x-app-layout>
  <div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Tickets Table</h5>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle">Check out Tickets From Zoho</h6>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="edit-btn">
                        <thead>
                          <tr>
                            <th>Ticket Num</th>
                            <th>department</th>
                            <th>Contact Person</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for ($i = 0; $i < count($data['data']); $i++)
                            <tr>
                              <td>{{$data['data'][$i]['ticketNumber']}}</td>
                              <td>{{$data['data'][$i]['department']['name']}}</td>
                              <td>{{$data['data'][$i]['contact']['firstName']}}  {{$data['data'][$i]['contact']['lastName']}}</td>
                              <td>{{$data['data'][$i]['subject']}}</td>
                              <td>{{$data['data'][$i]['status']}}</td>
                            </tr>
                          @endfor
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
  </div>
</x-app-layout>
