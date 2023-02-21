<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <title>Employee</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="nav-left">
            <img src="{{ asset('assets/icon.png') }}" alt="">
        </div>
        <div class="nav-right">
            <a href="/">Home</a>
            <a href="/employee">Employee</a>
            <a href="/aboutus">About Us</a>
        </div>
    </nav>


    <div class="employee">
        <div class="desc">
            <h3 class="top-c-sep">Daftar Karyawan</h3>
            <p >Total Karyawan : {{ $count = DB::table('employees')->count()}}</p>
        </div>

        <div class="but">
            <form action="{{ route('addemployee')}}">
                <button type="submit" class="addbutton">Add</button>
            </form>
        </div>

        @foreach($employees as $employee)
            <div class="list-employee">
                <div class="data-employee">
                    <h3>{{ $employee->nama}}</h3>
                    <ul class="databox">
                        <li>Umur : {{ $employee->umur}}</li>
                        <li>Alamat : {{ $employee->alamat}}</li>
                        <li>Nomor telepon : {{ $employee->notelp}}</li>
                    </ul>
                    <div class="btn-group">
                        <form action="{{ route('updateview', $employee->id)}}">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                        <form action="{{ route('deleteemployee', $employee->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <h6>{{ $employee->created_at}} </h6>
                </div>
            </div>
        @endforeach 
        <div class="space"></div>
    </div>
</body>
</html>