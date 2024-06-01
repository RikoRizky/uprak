<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href=" {{ url('bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        .header-jumbotron{
            min-height: 640px;
            background-image: url('{{url('assets/parkir.png')}}');
            background-size: cover;
            background-position: center; 
            font-style: sans-serif;
            color: black;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand text-white">
            Webku
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarweb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarweb">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{url('tampil')}}" class="nav-link active text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin')}}" class="nav-link text-white">Data admin</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('vehicle')}}" class="nav-link text-white">Data Parkiran</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('report')}}" class="nav-link text-white">Data laporan</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout')}}" role="button" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i></a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
    @endif
    @yield("content")
</div>
    
<script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>