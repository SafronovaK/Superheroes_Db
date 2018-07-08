<!DOCTYPE html>
<html lang="en">
<head>
    @section('meta')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @show
    <title>Superheroes Database</title>
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.css')}}">
    @show
</head>
<body>
    <header>
        <div class="container">
            <img class="w-100" src="{{URL::asset('images/logo.png')}}"/>
        </div>
    </header>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>

    @section('scripts')
        <script src="{{URL::asset('js/jquery.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"><script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @show
</body>
</html>