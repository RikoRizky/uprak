@extends("template")

@section("content")

<div class="container mt-5">
<div class="row">
        <div class="col-md-10">
            <h1>Vehicles List</h1>
        </div>
        <div class="col-md-2 text-right">
            <a href="{{url('createvehicle')}}" class="btn btn-info">Tambah data</a>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>Admin ID</th>
                    <th>Kategori</th>
                    <th>Brand</th>
                    <th>Tipe</th>
                    <th>Nomer</th>
                    <th>Harga perjam</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>
                    <th>Total Harga</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                    <tr>
                        <td class="text-center">{{ $vehicle->id }}</td>
                        <td class="text-center">{{ $vehicle->admin_id }}</td>
                        <td class="text-center">{{ $vehicle->category }}</td>
                        <td class="text-center">{{ $vehicle->brand }}</td>
                        <td class="text-center">{{ $vehicle->type }}</td>
                        <td class="text-center">{{ $vehicle->number }}</td>
                        <td class="text-center">{{ $vehicle->cost_per_hour }}</td>
                        <td class="text-center">{{ $vehicle->time_start }}</td>
                        <td class="text-center">{{ $vehicle->time_end }}</td>
                        <td class="text-center">{{ $vehicle->total_price }}</td>
                        <td class="text-center"><a class="btn btn-success" href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a></td>
                        <td class="text-center">
                            <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus {{ $vehicle->tipe }}?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
