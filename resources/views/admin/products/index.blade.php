@include('admin.header')
@include('admin.sidebar')

<div class="card">
    <div class="card-header">
        <h4>Products page</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Images</th>
                    <TH>Action</TH>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data )
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->small_description }}</td>
                    <td><img style="width: 75px " src="/{{ $data->image }}" alt=""></td>
                    <td>
                        <a  href="{{ url('product/edit/'.$data->id) }}" class="btn btn-primary">Edit</a>
                        <a class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('admin.footer')

