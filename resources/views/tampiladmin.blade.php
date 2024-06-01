@extends("tampilan")

@section("content")

<div class="container mt-5">
        <h1 class="mb-4">Admin List</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td class="text-center">{{ $admin->id }}</td>
                        <td class="text-center">{{ $admin->name }}</td>
                        <td class="text-center">{{ $admin->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection