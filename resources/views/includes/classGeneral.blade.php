<div class="container-fluid">
    <!-- collapsing div kwa ajili ya kuonesha matokeo -->
    <div class="col-md-12">
        <button class="btn btn-info " data-toggle="collapse" data-target="#viewClassResults"
            style="width: 25%; margin:20px;">View Class Results</button>

        <!-- collapsed card for showing class results -->
        <div class="card collapse" id="viewClassResults">
            <div class="card-body" style=" background: #19B3D3; color:white;">
                <h6>Overall Results of (class name) </h6>
            </div>
            <div class="card-body" style="margin-bottom:40px;">
                <!--navuta vuta page ya matokeo -->
                @include('includes.academicReport')
            </div>
        </div>
    </div>

    <!-- div iliyo beba list ya wanafunzi katika darasa na mkondo husika -->
    <div class="row" style="margin-top:40px;">
        <!-- div iliyo beba majina ya wanafunziwalio kuwa katika section fulani -->
        <div class="col-md-8">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-classA-tab" data-toggle="tab" href="#nav-classA"
                        role="tab" aria-controls="nav-classA" aria-selected="true">Class A</a>
                    <a class="nav-item nav-link" id="nav-classB-tab" data-toggle="tab" href="#nav-classB" role="tab"
                        aria-controls="nav-classB" aria-selected="false">Class B</a>
                    <a class="nav-item nav-link" id="nav-classC-tab" data-toggle="tab" href="#nav-classC" role="tab"
                        aria-controls="nav-classC" aria-selected="false">Class C</a>
                </div>
            </nav>
            <!-- tab contents -->
            <div class="tab-content" id="nav-tabContent">
                <!--content of tab class a -->
                <div class="tab-pane fade show active" id="nav-classA" role="tabpanel" aria-labelledby="nav-classA-tab">
                    <div class="card">
                        <div class="card-body" style="background: #19B3D3; color:white;">
                            <h4>List of Students in Form One A</h4>
                        </div>
                        <div class=" card-body">
                            <table class="table table-hover table-info">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Henry Joseph Kihanga</td>
                                    </tr>
                                    <tr>
                                        <td>Henry Joseph Kihanga</td>
                                    </tr>
                                    <tr>
                                        <td>Henry Joseph Kihanga</td>
                                    </tr>
                                    <tr>
                                        <td>Henry Joseph Kihanga</td>
                                    </tr>
                                    <tr>
                                        <td>Henry Joseph Kihanga</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--content of tab class b -->
                <div class="tab-pane fade" id="nav-classB" role="tabpanel" aria-labelledby="nav-classB-tab">classB</div>

                <!--content of tab class c -->
                <div class="tab-pane fade" id="nav-classC" role="tabpanel" aria-labelledby="nav-classC-tab">ClassC</div>
            </div>
        </div>

        <!-- colamu ambayo ya majina ya wanafunzi ambao hawajapangwa ktk mikondo -->
        <div class="col-md-4">
            <!-- card yenye table ya wanafunzi wasio pewa madarasa -->
            <div class="card">
                <div class="card-body" style="background: #19B3D3; color:white;">
                    <h4>Form One Students not assigned section </h4>
                </div>
                <div class=" card-body">
                    <table class="table table-hover table-info">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button class="btn btn-info" data-toggle="collapse" data-target="#setClassSection"
                                        style="width: 100%;">Juma Abdull Yahya</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- collapsed card for setting class section to a student -->
            <div class="card collapse" id="setClassSection">
                <div class="card-body" style="background: #19B3D3; color:white;">
                    <h6>Assign (student name) to class section </h6>
                </div>
                <div class="card-body">
                    <form action="" method="">
                        <div class=" form-group row">
                            <label for="classSections" class="col-md-3 col-form-label">
                                <h6>Section :</h6>
                            </label>
                            <div class="col-md-6">
                                <select id="classSections" class="form-control">
                                    <option selected>Class A</option>
                                    <option>Class B</option>
                                    <option>Class C</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" name="submitStudentSection">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
