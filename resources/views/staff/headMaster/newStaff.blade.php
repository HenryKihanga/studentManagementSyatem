
@extends('layouts.headMasterSideBar')
@section('tabBody')

<div class="container">
    <div class="card">
        <div class="card-body" style="background:#19B3D3; color:white;">
            <h5>ENTER STAFF DETAILS</h5>
        </div>
        <div class="card-body">
            <form action="./headMasterPage.php?page=staffRegistration" method="POST" enctype="multipart/form-data">
                <!--staff first name -->
                <div class="form-group row">
                    <label for="staffFirstName" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="staffFirstName" name="staffFirstName"
                            value="">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!--staff middle name -->
                <div class="form-group row">
                    <label for="staffMiddleName" class="col-sm-2 col-form-label">Middle Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="staffMiddleName" name="staffMiddleName"
                            value="">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!--staff last name -->
                <div class="form-group row">
                    <label for="staffLastName" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="staffLastName" name="staffLastName"
                            value="">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!--staff email -->
                <div class="form-group row">
                    <label for="staffEmail" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="staffEmail" name="staffEmail"
                            value="">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!--staff phone number -->
                <div class="form-group row">
                    <label for="staffPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="staffPhoneNumber" name="staffPhoneNumber"
                            placeholder="0xxxxxxxxx" value="">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!--staff occupation -->
                <div class="form-group row">
                    <label for="staffOccupation" class="col-sm-2 col-form-label">Occupation</label>
                    <div class="col-sm-9">
                        <select id="staffOccupation" class="form-control" name="occupation">
                            <option value="4" selected>Teacher</option>
                            <option value="2">Academic</option>
                            <option value="3">Malezi</option>
                        </select>
                    </div>
                </div>

                <!--staff select gender -->
                <div class="form-group row">
                    <label for="inputGender" class="col-sm-2 col-form-label">Select Gender</label>
                    <div class="col-sm-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioMale" value="M" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="radioMale">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioFemale" value="F" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="radioFemale">Female</label>
                        </div>
                    </div>
                </div>

                <!--staff birth date -->
                <div class="form-group row">
                    <label for="staffBirthDate" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="staffBirthDate" name="staffBirthDate"
                            value="">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!-- staff residance -->
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
                <!-- staff profile picture -->
                <div class="form-group row">
                    <label for="staffProfilePicture" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="staffProfilePicture"
                            id="staffProfilePicture">
                        <div class="text-danger"></div>
                    </div>
                </div>

                <!-- staff description -->
                <div class="form-group row">
                    <label for="studentDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="studentDescription" name="staffDescription" cols="30"
                            rows="5" placeholder="Describe student here"></textarea>
                    </div>
                </div>

                <!-- submit button -->
                <button type="submit" name="submitStaffData" class="btn btn-info">Register Staff</button>
            </form>
        </div>
    </div>
</div>

@endsection
