<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <title>PTMeksiko</title>
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


<!-- content home -->
    <div class="but">
        <form action="{{ route('addemployee')}}">
            <button type="submit" class="addhomebutton">Add</button>
        </form>
    </div>

    <div class="employee">
        <div class="desc">
            <h2 class="top-c-sep">Grow your career with us</h2>
            <p>Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit. Aenean socada commodoligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
        </div>
        
    </div>



</body>
</html>