@extends('template')

@section('content')
<div class="container mt-5">
<div class="row">
        <div class="col-md-10">
            <h1>Vehicle Report</h1>
        </div>
        <div class="col-md-2 text-right">
            <button class="btn btn-primary" onclick="window.print()">
                <i class="fas fa-print"></i> Print
            </button>
        </div>
    </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Number</th>
                    <th>Cost Per Hour</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->admin_id }}</td>
                    <td>{{ $vehicle->category }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->type }}</td>
                    <td>{{ $vehicle->number }}</td>
                    <td>{{ $vehicle->cost_per_hour }}</td>
                    <td>{{ $vehicle->time_start }}</td>
                    <td>{{ $vehicle->time_end }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection