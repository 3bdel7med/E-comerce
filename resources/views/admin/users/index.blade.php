@include('admin.header')
@include('admin.sidebar')
<div class="card">
    <div class="card-header">
        <h3>regstered users</h3>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as$data )
                <tr>
                    <td><img style="width: 60px;height:60px" src="/{{ $data->avatar }}" alt=""></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>
                       <button class=" btn btn-success">
                        @if ($data->admin)
                     <a href="/deleteadmin/{{ $data->id }}">Delete Admin</a>
                     @else
                     <a href="/makeadmin/{{ $data->id }}">Make Admin</a>
                        @endif
                       </button>
                       <button class=" btn btn-danger"><a href="/user/delete/{{ $data->id }}" >Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@include('admin.footer')
