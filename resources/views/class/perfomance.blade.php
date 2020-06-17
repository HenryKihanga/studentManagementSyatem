<?php
$subjectOneName = "kiswahili";
$subjectTwoName = "kingereza";

?>

<div class="card">
    <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
        <h5>VIEW CLASS RESULT SUMMARY</h5>
    </div>
    <div class="card-body">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link fade show active" id="nav-kiswahili-tab" data-toggle="tab"
                    href="#nav-kiswahili" role=" tab" aria-controls="nav-kiswahili" aria-selected="true">kiswahili</a>

                <a class="nav-item nav-link" id="nav-kingereza-tab" data-toggle="tab" href="#nav-kingereza" role="tab"
                    aria-controls="nav-kingereza" aria-selected="false">kingereza</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <!-- sehemu ya kuangalia  matokeo ya jumla ya darasa kwa somo la kiswahili -->
            <div class="tab-pane fade show active" id="nav-kiswahili" role="tabpanel"
                aria-labelledby="nav-kiswahili-tab">

                <!-- contena yenye card ya kuangalia matokeo ya wanafunzi kwa somo ya kiswahili -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                        <div class="card">
                            <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
                                <h3>MATOKEO YA SOMO LA () KWA DARASA LA ()</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">TOTAL</th>
                                            <th scope="col">AVARAGE</th>
                                            <th scope="col">GRADE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>ZOEZI</th>
                                            <td>4500</td>
                                            <td>68</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <th>JARIBIO</th>
                                            <td>3904</td>
                                            <td>46</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <th>AVERAGE TOTAL</th>
                                            <td colspan="3">128</td>
                                        </tr>
                                        <tr>
                                            <th>OVERALL AVERAGE</th>
                                            <td colspan="3">64</td>
                                        </tr>
                                        <tr>
                                            <th>OVERALL GRADE</th>
                                            <td colspan="3">B</td>
                                        </tr>
                                        <tr>
                                            <th>COMMENTS</th>
                                            <td colspan="3">Very Good</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- sehemu ya kuangalia matokeo ya jumla ya darasa kwa somo la kingereza -->
            <div class="tab-pane fade" id="nav-kingereza" role="tabpanel" aria-labelledby="nav-kingereza-tab">
                <!-- contena lenye form ya kuingiza matokeo ya wanafunzi kwa somo ya kiswahili -->

            </div>
        </div>
    </div>
</div>
