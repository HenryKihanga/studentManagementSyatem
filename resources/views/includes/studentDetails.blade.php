<div class="container">
    <div class="card">
        <div class="card-body" style="background: #19B3D3; color:white;">
            <h4>STUDENT INFORMATIONS</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="profilePictureFrame">
                        <img src="./resources/uploads/profileImages/kihanga.jpg" class="profilePicture"
                            alt="profile picture" style="width: 100% ;height :100%">
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Student Id :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>2017-12-345666</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Name :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>Henry Richard Kihanga</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Gender :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>M</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Date of Birth :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>12/12/2345</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Region :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>Morogoro</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>District :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>Morogoro Mjini</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Ward :</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>Kihonda</h6>
                        </div>
                    </div>
                    <br><br><br>
                    <!-- hii row ita appera kwa academic -->
                    <div class="row">
                        <div class="col-md-3">
                            <button class="btn btn-info">EDIT INFO</button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-info">VIEW PARENT</button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-info" data-toggle="collapse" data-target="#punish">PUNISH</button>
                        </div>
                    </div>
                    <br><br><br>
                    <!-- hii row ita appear kwa head naster tu -->
                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-info">DELETE</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info">SUSPEND</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card collapse" id="punish">
            <div class="card-body " style="background: #19B3D3; color:white;">
                <h6>Insert Punishment</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <!--Chagua adhabu -->
                    <div class=" form-group row">
                        <label for="inputFirstName" class="col-md-2 col-form-label">
                            <h6>Choose Punishment :</h6>
                        </label>
                        <div class="col-sm-6">
                            <select id="region" class="form-control">
                                <option selected>Moping</option>
                                <option>Kuchimba Shimo</option>
                                <option>Kufyeka</option>
                                <option>Kufyeka</option>
                                <option>Kufyeka</option>
                            </select>
                        </div>
                    </div>

                    <!-- Start and end time -->
                    <div class="form-row">
                        <label for="Punishment Duration" class="col-md-2 col-form-label">
                            <h6>Punishment Duration :</h6>
                        </label>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="start">Start Date:</label>
                                <input type="date" name="startDate">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-6">
                                <label for="end">End Date:</label>
                                <input type="date" name="endDate">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submitPunishment" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>
</div>
