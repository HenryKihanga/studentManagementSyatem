@extends('layouts.header')

@section('content')
<main>
    <div class="row">
        <div class="col-2 sidebar">
            <div class="profile">
                <center>
                    <img class="profileImage" src=""
                        alt="profile picture">
                    <h4>HENRY KIHANGA FUNDI
                    </h4>
                </center>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a class="nav-link text-white" href="/class/formOne/index">Form one</a>
                <a class="nav-link text-white" href="/class/formTwo/index" > Form Two </a>
                <a class="nav-link text-white" href="/class/formThree/index">Form Three</a>
                <a class="nav-link text-white" href="/class/formFour/index" >Form Four</a>
                <a class="nav-link text-white" href="/class/formFive/index" >Form Five</a>
                <a class="nav-link text-white" href="/class/formSix/index" >Form Six</a>
                <a class="nav-link text-white" href="/staff/academic/schoolOverAllResults" >School Over All Results</a>
                <a class="nav-link text-white" href="/staff/academic/details" >View Details</a>
                <a class="nav-link text-white" href="">Logout</a>
            </div>
        </div>
        <div class="col-10">

            @yield('tabBody');


        </div>
    </div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</main>
@endsection
