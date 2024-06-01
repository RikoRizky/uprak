@extends("template")

@section("content")

<div class="container mt-5">
        <h1>Edit Vehicle</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('vehicles.update', $vehicle->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="admin_id">Admin ID</label>
                <input type="text" class="form-control" id="admin_id" name="admin_id" value="{{ $vehicle->admin_id }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $vehicle->category }}">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $vehicle->brand }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $vehicle->type }}">
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" class="form-control" id="number" name="number" value="{{ $vehicle->number }}">
            </div>
            <div class="form-group">
                <label for="cost_per_hour">Cost Per Hour</label>
                <input type="text" class="form-control" id="cost_per_hour" name="cost_per_hour" value="{{ $vehicle->cost_per_hour }}">
            </div>
            <div class="form-group">
                <label for="time_start">Time Start</label>
                <input type="text" class="form-control" id="time_start" name="time_start" value="{{ $vehicle->time_start }}">
            </div>
            <div class="form-group">
                <label for="time_end">Time End</label>
                <input type="text" class="form-control" id="time_end" name="time_end" value="{{ $vehicle->time_end }}">
            </div>
            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" value="{{ $vehicle->total_price }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

@endsection