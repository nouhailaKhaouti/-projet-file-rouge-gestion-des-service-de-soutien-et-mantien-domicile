<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        User DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>role</th>
                    <th>N° warning</th>
                    <th>acces denied</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Icon</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>role</th>
                    <th>N° warning</th>
                    <th>acces denied</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                            <img src="Companyimage/{{$user->icon}}" class="card-img-top img-cover" alt="Raeesh" height="30" width="30">
                        </div>
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>@foreach ($user->roles as $role) {{ $role->name }} @endforeach </td>
                    <td>{{$user->warning}}</td>
                    <td>
                    @if($user->access=='approved')
                    <a class="btn btn-sm  btn-outline-danger" onclick="return confirm('are you sure ,you want to band this user ')" href="{{url('acces_denied',$user->id)}}">denied</a>
                    @else
                    <a class="btn btn-sm  btn-outline-primary" href="{{url('acces_approved',$user->id)}}">approved</a>
                    @endif
                    @include('admin.tables.warning_email') 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>