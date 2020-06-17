<?php
$subjectOneName = "kiswahili";
$subjectTwoName = "kingereza";

?>


<div class="card">
    <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
        <h5>YOU MAY INSERT STUDENTS RESULTS</h5>
    </div>
    <div class="card-body">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link fade show active" id="nav-kiswahili-tab" data-toggle="tab"
                    href="#nav-kiswahili" role=" tab" aria-controls="nav-kiswahili" aria-selected="true">kiswahili</a>
                <a class="nav-item nav-link" id="nav-kingereza-tab" data-toggle="tab" href="#nav-kingereza" role="tab"
                    aria-controls="nav-kingereza" aria-selected="false">kingreza</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <!-- sehemu ya kuingiza matokeo kwa somo la kiswahili -->
            <div class="tab-pane fade show active" id="nav-kiswahili" role="tabpanel"
                aria-labelledby="nav-kiswahili-tab">

                <!-- contena lenye form ya kuingiza matokeo ya wanafunzi kwa somo ya kiswahili -->
                <div class="container">
                    <form action="" method="">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Student Id</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Zoezi</th>
                                    <th scope="col">Jaribio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2017-20-2345</td>
                                    <td>Henry Joseph Ramadhan</td>
                                    <td>
                                        <input class="form-control" type="text" name="zoezi">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="jaribio">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input class="btn btn-info" type="submit" name="sunmitResults">
                    </form>
                </div>
            </div>

            <!-- sehemu ya kuingiza matokeo kwa somo la kingereza -->
            <div class="tab-pane fade" id="nav-kingereza" role="tabpanel" aria-labelledby="nav-kingereza-tab">

                <!-- contena lenye form ya kuingiza matokeo ya wanafunzi kwa somo ya kiswahili -->
                <div class="container">
                    <form action="" method="">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Student Id</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Zoezi</th>
                                    <th scope="col">Jaribio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2017-20-2345</td>
                                    <td>Henry Joseph Ramadhan</td>
                                    <td>
                                        <input class="form-control" type="text" name="zoezi">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="jaribio">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input class="btn btn-info" type="submit" name="submitResults">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
