<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        animal service DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>service name</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>N°</th>
                    <th>service name</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{$service->libelle}}</td>
                    <td><a class="btn btn-sm  btn-outline-danger" onclick="return confirm('are you sure ,you want to delete this service ')" href="{{url('service_delete',$service->id)}}">delete</a></td>
                    <td>@include('admin.demandes.service_update')</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>