<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/addemployee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <title>Update</title>
</head>
<body>
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


    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                <form action="{{ route('updatedata', $employee->id)}}"  method="POST" > 
                @method('PATCH')   
                @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="nama" value="{{ $employee->nama}}" class="form-control" type="text" placeholder="Nama"> </div>
                                <span style="color:red">
                                    @error('nama')
                                        <span class="error">{{$message}}</span>
                                    @enderror
                                </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input name="umur" value="{{ $employee->umur}}" class="form-control" type="number" placeholder="Umur"> </div>
                                    <span style="color:red">
                                        @error('umur')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input name="alamat" value="{{ $employee->alamat}}" class="form-control" type="text" placeholder="Alamat"> </div>
                                    <span style="color:red">
                                        @error('alamat')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input name="notelp" value="{{ $employee->notelp}}" class="form-control" type="number" placeholder="Nomor Telepon"> </div>
                                    <span style="color:red">
                                        @error('notelp')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block confirm-button" type="submit">
                        Save
                    </button>
                    <form action="{{route('employee')}}">
                        <button class="btn btn-block" type="submit">Back</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
</body>
</html>