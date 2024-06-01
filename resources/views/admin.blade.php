@extends("template")

@section("content")

<div class="container mt-5">
<div class="row">
        <div class="col-md-10">
            <h1>Admin List</h1>
        </div>
        <div class="col-md-2 text-right">
            <a href="{{url('createadmin')}}" class="btn btn-info">Tambah data</a>
        </div>
    </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->password }}</td>
                        <td><a class="btn btn-success" href="{{ route('admins.edit', $admin->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus {{ $admin->name }}?')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection