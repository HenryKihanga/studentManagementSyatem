@extends('layouts.header')
@section('content')
<main>
    <div class="row">
        <!-- HEADMASTER SIDE BAR -->
        <div class="col-2 sidebar">
            <div class="profile">
                <center>
                    <img class="profileImage" src="" alt="kihanga profile picture">
                    <h4>Lorem ipsum </h4>
                </center>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!-- LINK FOR viewAllStudentsScreen -->
                <a class="nav-link text-white show active" id="v-pills-viewStudent-tab" data-toggle="pill"
                    href="#v-pills-viewStudent" role="tab" aria-controls="v-pills-viewStudent" aria-selected="true">View
                    All Students</a>

                <!-- LINK FOR viewAllStaffs -->
                <a class="nav-link text-white" id="v-pills-viewStaff-tab" data-toggle="pill" href="#v-pills-viewStaff"
                    role="tab" aria-controls="v-pills-viewStaff" aria-selected="false">View all Staffs</a>

                <!-- LINK FOR staffRegistration -->
                <a class="nav-link text-white " id="v-pills-staffRegistration-tab" data-toggle="pill"
                    href="#v-pills-staffRegistration" role="tab" aria-controls="v-pills-staffRegistration"
                    aria-selected="false">Add New Staff</a>

                <!-- LINK FOR HEADMASTER DETAILS -->
                <a class="nav-link text-white" id="v-pills-details-tab" data-toggle="pill" href="#v-pills-details"
                    role="tab" aria-controls="v-pills-details" aria-selected="false">View Details</a>

                <!-- LINK FOR HEADMASTER LOGOUT -->
                <a class="nav-link text-white" href="">Logout</a>
            </div>
        </div>





        <!-- HEADMASTER SCREENS WITH ABOVE  CORRESPONDING SIDE BAR LINKS -->
        <div class="col-10">
            <!-- tab contents are organized on the following div-->
            <div class="tab-content" id="v-pills-tabContent">

                <!--VIEW ALL STUDENTS SCREEN CONTENT DIV -->
                <div class="tab-pane fade show active" id="v-pills-viewStudent" role="tabpanel"
                    aria-labelledby="v-pills-viewStudent-tab">
                    @include('includes.allStudents')
                </div>

                <!--VIEW ALL STAFF SCREEN CONTENT DIV -->
                <div class="tab-pane fade" id="v-pills-viewStaff" role="tabpanel"
                    aria-labelledby="v-pills-viewStaff-tab">
                    @include('staff.headMaster.includes.allStaffs')
                </div>

                <!-- ADD NEW STAFF SCREEN CONTENT DIV-->
                <div class="tab-pane fade show " id="v-pills-staffRegistration" role="tabpanel"
                    aria-labelledby="v-pills-staffRegistration-tab">
                    @include('staff.headMaster.includes.staffRegistration')
                </div>


                <!-- HEADMASTER DETAILS SCREEN -->
                <div class="tab-pane fade" id="v-pills-details" role="tabpanel" aria-labelledby="v-pills-details-tab">
                    @include('includes.details')
                </div>
            </div>
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
