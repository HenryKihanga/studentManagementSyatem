@extends('layouts.header')

@section('content')
    <div class="row">
        <div class="col-2 sidebar">
            <div class="profile">
                <center>
                    <img class="profileImage" src="" alt="kihanga profile picture">
                    <h4>Henry Kihanga</h4>
                </center>
            </div>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link text-white active" id="v-pills-home-tab" data-toggle="pill"
                    href="#v-pills-studentRegistration" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">Student Registration</a>
                <a class="nav-link text-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                    role="tab" aria-controls="v-pills-profile" aria-selected="false">View all Students</a>
                <a class="nav-link text-white" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                    role="tab" aria-controls="v-pills-messages" aria-selected="false">Suspended/Blacklisted Students</a>
                <a class="nav-link text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                    role="tab" aria-controls="v-pills-settings" aria-selected="false">Punished Students</a>
                <a class="nav-link text-white" id="v-pills-details-tab" data-toggle="pill" href="#v-pills-details"
                    role="tab" aria-controls="v-pills-details" aria-selected="false">View Details</a>
                <a class="nav-link text-white" href="./logout.php">Logout</a>
            </div>
        </div>
        <div class="col-10">
            <!-- tab contents are organized on the following div-->
            <div class="tab-content" id="v-pills-tabContent">

                <!--student and parent Registration content div -->
                <div class="tab-pane fade show active" id="v-pills-studentRegistration" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    @include('staff.discipline.includes.studentRegistration')
                </div>

                <!--viewing all students content div -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    @include('includes.allStudents')
                </div>


                <!-- suspended and Blacklisted students content div-->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    @include('staff.discipline.includes.suspendedAndBlacklistedStudents')
                </div>

                <!-- students who have been assigned punishments -->
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    @include('staff.discipline.includes.punishedStudents')
                </div>

                <!-- user details -->
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
@endsection
