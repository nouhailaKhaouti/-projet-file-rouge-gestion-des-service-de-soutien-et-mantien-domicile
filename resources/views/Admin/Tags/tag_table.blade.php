<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Post tag DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>tag name</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>N°</th>
                    <th>tag name</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{$tag->label}}</td>
                    <td><a class="btn btn-sm  btn-outline-danger" onclick="return confirm('are you sure ,you want to delete this tag ')" href="{{url('tag_delete',$tag->id)}}">delete</a></td>
                    <td>@include('Admin.Tags.tag_update')</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>