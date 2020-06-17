@extends('layouts.header')
@section('content')

<div class="row">
    <div class="col-2 sidebar">
        <div class="profile">
            <center>
                <img class="profileImage" src=""
                    alt="kihanga profile picture">
                <h4>Teacher's Name
                </h4>
            </center>
        </div>

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link text-white active" id="v-pills-viewTeacherAllStudents-tab" data-toggle="pill"
                href="#v-pills-viewTeacherAllStudents" role="tab" aria-controls="v-pills-viewTeacherAllStudents"
                aria-selected="false">View all Students</a>

            <a class="nav-link text-white" id="v-pills-enterStudentResults-tab" data-toggle="pill"
                href="#v-pills-enterStudentResults" role="tab" aria-controls="v-pills-enterStudentResults"
                aria-selected="false">Enter Students Results</a>

            <a class="nav-link text-white" id="v-pills-teacherClassPerformance-tab" data-toggle="pill"
                href="#v-pills-teacherClassPerformance" role="tab" aria-controls="v-pills-teacherClassPerformance
        " aria-selected="false">Class Performance</a>

            <a class="nav-link text-white" id="v-pills-details-tab" data-toggle="pill" href="#v-pills-details"
                role="tab" aria-controls="v-pills-details" aria-selected="false">View Details</a>

            <a class="nav-link text-white" href="">Logout</a>
        </div>
    </div>

    <div class="col-10">
        <!-- tab contents are organized on the following div-->
        <div class="tab-content" id="v-pills-tabContent">

            <!--viewing all students of a particular teacher content div -->
            <div class="tab-pane fade show active" id="v-pills-viewTeacherAllStudents" role="tabpanel"
                aria-labelledby="v-pills-viewTeacherAllStudents-tab">
             @include('includes.allStudents')
            </div>




            <!-- enter student results content div-->
            <div class="tab-pane fade" id="v-pills-enterStudentResults" role="tabpanel"
                aria-labelledby="v-pills-enterStudentResults-tab">
           @include('staff.teacher.includes.resultAllocation')
            </div>

            <!-- overall class performance per class -->
            <div class="tab-pane fade" id="v-pills-teacherClassPerformance" role="tabpanel"
                aria-labelledby="v-pills-teacherClassPerformance-tab">
                @include('class.perfomance')
            </div>

            <!-- USER DETAILS -->
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
