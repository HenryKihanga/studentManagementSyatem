<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- Extrnal CSS file --}}
    <link rel="stylesheet" href="{{ asset ('css/customStyle.css')}}">


    <body>
    <header>
    <h3>STUDENT <span>MANAGEMENT</span> SYSTEM</h3>
    </header>
    <main class="main-body">


       @yield('content')

       
    </main>



    </body>
</html>
