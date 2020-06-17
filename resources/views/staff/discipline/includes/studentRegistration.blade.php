<div class="container">
    <div class="card">
        <div class="card-body" style="background: #19B3D3; color:white;">
            <h5>Student Details</h5>
        </div>
        <div class="card-body">
            <form action="./maleziPage.php" method="POST" enctype="multipart/form-data">
                <!--student first name -->
                <div class="form-group row">
                    <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputFirstName" name="studentFirstName" value="">
                    </div>
                </div>

                <!--student middle name -->
                <div class="form-group row">
                    <label for="inputMiddleName" class="col-sm-2 col-form-label">Middle Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputMiddleName" name="studentMiddleName" value="">
                    </div>
                </div>

                <!--student last name -->
                <div class="form-group row">
                    <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputLastName" name="studentLastName" value="">
                    </div>
                </div>
                <!--student class -->
                <div class="form-group row">
                    <label for="studentClass" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-9">
                        <select id="studentClass" class="form-control" name="class">
                            <option value="1" selected>Form One</option>
                            <option value="2">Form Two</option>
                            <option value="3">Form Three</option>
                            <option value="4">Form Four</option>
                            <option value="5">Form Five</option>
                            <option value="6">Form Six</option>
                        </select>
                    </div>
                </div>

                <!--student select gender -->
                <div class="form-group row">
                    <label for="inputGender" class="col-sm-2 col-form-label">Select Gender</label>
                    <div class="col-sm-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioMale" name="gender" value="M" class="custom-control-input">
                            <label class="custom-control-label" for="radioMale">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioFemale" name="gender" value="F" class="custom-control-input">
                            <label class="custom-control-label" for="radioFemale">Female</label>
                        </div>
                    </div>
                </div>

                <!--student birth date -->
                <div class="form-group row">
                    <label for="inputBirthDate" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="inputBirthDate" name="studentBirthDate" value="">
                    </div>
                </div>

                <!-- student residance -->
                <div class="form-row">
                    <label for="residance" class="col-sm-2 col-form-label">Residance</label>
                    <div class="form-group col-md-3">
                        <label for="region">Region</label>
                        <select id="region" name="region" class="form-control">
                            <option value="Morogoro" selected>Morogoro</option>
                            <option value="Iringa">Iringa</option>
                            <option value="Dodoma">Dodoma</option>
                            <option value="Dar es Salaam">Dar es Salaam</option>
                            <option value="Mbeya">Mbeya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="district">District</label>
                        <select id="district" name="district" class="form-control">
                            <option value="Morogoro Mjini" selected>Morogoro Mjini</option>
                            <option value="Misufini">Misufini</option>
                            <option value="Ihemi">Ihemi</option>
                            <option value="Kyela">Kyela</option>
                            <option value="Ubungo">Ubungo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="ward">Ward</label>
                        <select id="ward" name="ward" class="form-control">
                            <option value="Kihonda" selected>Kihonda</option>
                            <option value="Kawe">Kawe</option>
                            <option value="Mbozi">Mbozi</option>
                            <option value="Mbezi">Mbezi</option>
                            <option value="Iyemi">Iyemi</option>
                        </select>
                    </div>
                </div>
                <!-- student profile picture -->
                <div class="form-group row">
                    <label for="studentProfilePicture" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="studentProfilePicture"
                            name="studentProfilePicture" value="">
                    </div>
                </div>

                <!-- birth and academic certificates -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="birthCertificate">Birth Certificate</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control-file" id="birthCertificate"
                                    name="studentBirthCertificate" value="">
                            </div>
                        </div>
                    </div>
                    <div class=" form-group col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="academicCertificate">Academic Certificate</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control-file" id="academicCertificate"
                                    name="studentAcademicCertificate" value="">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- health report and bank slip -->
                <div class="form-row ">
                    <div class="form-group col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="healthReport">Health Report</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control-file" id="healthReport"
                                    name="studentHealthReport" value="">
                            </div>
                        </div>
                    </div>

                    <div class=" form-group col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="bankPayinSlip">Bank Slip</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control-file" id="bankPayinSlip"
                                    name="studentBankPayinSlip" value="">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- student description -->
                <div class=" form-group row">
                    <label for="studentDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="studentDescription" name="studentDescription" cols="30"
                            rows="2" placeholder="Describe student here" value=""></textarea>
                    </div>
                </div>

                <!-- submit button -->
                <button type=" submit" name="submitStudentData" class="btn btn-info">SUBMIT THEN AND PARENT
                    INFO</button>
            </form>
        </div>
    </div>
</div>
