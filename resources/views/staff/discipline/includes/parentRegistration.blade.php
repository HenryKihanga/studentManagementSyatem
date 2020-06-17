<div class="container">
    <div class="card">
        <div class="card-body" style="background:#19B3D3; color:white;">
            <h5>Parent Details</h5>
        </div>
        <div class="card-body">
            <form action="./maleziPage.php" method="POST" enctype="multipart/form-data">
                <!--parent first name -->
                <div class="form-group row">
                    <label for="parentFirstName" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="parentFirstName" name="parentFirstName"
                            value="<?php echo htmlspecialchars($parentFname); ?>">
                    </div>
                </div>

                <!--parent middle name -->
                <div class="form-group row">
                    <label for="parentMiddleName" class="col-sm-2 col-form-label">Middle Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="parentMiddleName" name="parentMiddleName"
                            value="<?php echo htmlspecialchars($parentMname); ?>">
                    </div>
                </div>

                <!--parent last name -->
                <div class="form-group row">
                    <label for="parentLastName" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="parentLastName" name="parentLastName"
                            value="<?php echo htmlspecialchars($parentLname); ?>">
                    </div>
                </div>

                <!--parent email -->
                <div class="form-group row">
                    <label for="parentEmail" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="parentEmail" name="parentEmail"
                            value="<?php echo htmlspecialchars($parentEmail); ?>">
                    </div>
                </div>

                <!--parent phone number -->
                <div class="form-group row">
                    <label for="parentPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="parentPhoneNumber" name="parentPhoneNumber"
                            placeholder="0xxxxxxxxx" value="<?php echo htmlspecialchars($parentPhoneNo); ?>">
                    </div>
                </div>

                <!--parent select gender -->
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

                <!--parent birth date -->
                <div class="form-group row">
                    <label for="parentBirthDate" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="parentBirthDate" name="parentBirthDate"
                            value="<?php echo htmlspecialchars($parentDob); ?>">
                    </div>
                </div>

                <!-- parent residance -->
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
                <!-- parent profile picture -->
                <div class="form-group row">
                    <label for="parentProfilePicture" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="parentProfilePicture"
                            value="<?php echo htmlspecialchars($profilePictureName); ?>">
                    </div>
                </div>

                <!-- parent description -->
                <div class="form-group row">
                    <label for="parentDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="parentDescription" name="parentDescription" cols="30"
                            rows="5" placeholder="Describe student here"
                            value="<?php echo htmlspecialchars($parentDescription); ?>"></textarea>
                    </div>
                </div>

                <!-- submit button -->
                <button type="submit" class="btn btn-info" name="submitParentData">SAVE PARENT TO COMPLETE STUDENT
                    REGISTRATION</button>
            </form>
        </div>
    </div>
</div>
