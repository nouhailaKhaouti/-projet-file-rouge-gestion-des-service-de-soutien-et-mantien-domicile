<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Provider requests DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>CIN</th>
                    <th>N° warning</th>
                    <th>request status</th>
                    <th>check request demande</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>CIN</th>
                    <th>N° warning</th>
                    <th>request status</th>
                    <th>check request demande</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($upgrades as $upgrade)
                <tr>
                    <td>{{$upgrade->user->name}} {{$upgrade->user->Prenom}}</td>
                    <td>{{$upgrade->user->email}}</td>
                    <td>{{$upgrade->cin}}</td>
                    <td>{{$upgrade->user->warning}}</td>
                    <td>
                        @if($upgrade->status=='InProgress')
                        <a class="btn btn-sm  btn-outline-success"  href="{{url('approved_provider',$upgrade->id)}}">Approve</a>
                        <a class="btn btn-sm  btn-outline-danger" onclick="return confirm('are you sure ,you want to refuse this request ')" href="{{url('refused_provider',$upgrade->id)}}">refuse</a>
                        @else
                        <strong>{{$upgrade->status}}</strong>
                        @endif
                    </td>
                    <td><a class="btn btn-sm  btn-outline-info"  href="{{url('request_demande',$upgrade->id)}}">check request demande</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>