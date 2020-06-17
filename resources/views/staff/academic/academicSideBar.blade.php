@extends('layouts.header')
@section('content')
<div class="row">
    <div class="col-2 sidebar">
        <div class="profile">
            <center>
                <img class="profileImage" src="" alt="profile picture">
                <h4>Henry Kihanga
                </h4>
            </center>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link text-white active" id="v-pills-formOne-tab" data-toggle="pill" href="#v-pills-formOne"
                role="tab" aria-controls="v-pills-formOne" aria-selected="true">Form one</a>
            <a class="nav-link text-white" id="v-pills-formTwo-tab" data-toggle="pill" href="#v-pills-formTwo"
                role="tab" aria-controls="v-pills-formTwo" aria-selected="false">Form Two</a>
            <a class="nav-link text-white" id="v-pills-formThree-tab" data-toggle="pill" href="#v-pills-formThree"
                role="tab" aria-controls="v-pills-formThree" aria-selected="false">Form Three</a>
            <a class="nav-link text-white" id="v-pills-formFour-tab" data-toggle="pill" href="#v-pills-formFour"
                role="tab" aria-controls="v-pills-formFour" aria-selected="false">Form Four</a>
            <a class="nav-link text-white" id="v-pills-formFive-tab" data-toggle="pill" href="#v-pills-formFive"
                role="tab" aria-controls="v-pills-formFive" aria-selected="false">Form Five</a>
            <a class="nav-link text-white" id="v-pills-formSix-tab" data-toggle="pill" href="#v-pills-formSix"
                role="tab" aria-controls="v-pills-formSix" aria-selected="false">Form Six</a>
            <a class="nav-link text-white" id="v-pills-schoolOverAllResults-tab" data-toggle="pill"
                href="#v-pills-schoolOverAllResults" role="tab" aria-controls="v-pills-schoolOverAllResults"
                aria-selected="false">School Over All Results</a>
            <a class="nav-link text-white" id="v-pills-details-tab" data-toggle="pill" href="#v-pills-details"
                role="tab" aria-controls="v-pills-details" aria-selected="false">View Details</a>
            <a class="nav-link text-white" href="">Logout</a>
        </div>
    </div>
    <div class="col-10">
        <!-- tab contents are organized on the following div-->
        <div class="tab-content" id="v-pills-tabContent">

            <!--form one content div -->
            <div class="tab-pane fade show active" id="v-pills-formOne" role="tabpanel"
                aria-labelledby="v-pills-formOne-tab">
                @include('staff.academic.includes.formOne')
            </div>

            <!--form two content div -->
            <div class="tab-pane fade" id="v-pills-formTwo" role="tabpanel" aria-labelledby="v-pills-formTwo-tab">

                @include('staff.academic.includes.formTwo')
            </div>

            <!-- form three content div-->
            <div class="tab-pane fade" id="v-pills-formThree" role="tabpanel" aria-labelledby="v-pills-formThree-tab">
                @include('staff.academic.includes.formThree')
            </div>


            <!-- form four content div -->
            <div class="tab-pane fade" id="v-pills-formFour" role="tabpanel" aria-labelledby="v-pills-formFour-tab">
                @include('staff.academic.includes.formFour')
            </div>

            <!--form five content div -->
            <div class="tab-pane fade" id="v-pills-formFive" role="tabpanel" aria-labelledby="v-pills-formFive-tab">
                @include('staff.academic.includes.formFive')
            </div>

            <!-- form six content div -->
            <div class="tab-pane fade" id="v-pills-formSix" role="tabpanel" aria-labelledby="v-pills-FormSix-tab">
                @include('staff.academic.includes.formSix')

            </div>

            <!-- form six content div -->
            <div class="tab-pane fade" id="v-pills-schoolOverAllResults" role="tabpanel"
                aria-labelledby="v-pills-schoolOverAllResults-tab">
                @include('staff.academic.includes.academicReport')

            </div>
            <!-- user details content div -->
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
