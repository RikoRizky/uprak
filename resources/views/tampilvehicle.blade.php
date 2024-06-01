@extends("tampilan")

@section("content")

<div class="container mt-5">
        <h1 class="mb-4">Vehicles List</h1>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
