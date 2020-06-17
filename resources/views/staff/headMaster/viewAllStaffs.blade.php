<!-- VIEWING ALL STUDENTS SCREEN -->


@extends('layouts.headMasterSideBar')

@section('tabBody')
<div class="container-fluid">
    <div class="card">
        <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
            <div class="row">
                <div class="col-3">
                    <h5>List of all staffs</h5>
                </div>
                <div class="col-9">
                    <form action="" class="form-group row">
                        <div class="col-sm-9"><input type="text" name="search" class="form-control"
                                placeholder="enter studentId or LastName"></div>
                        <div class="col-sm-2"><input type="submit" name="search-submit" class="btn btn-light"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover ">
                <!-- check for availability of any data and obtain the data -->
                <thead>
                    <tr>
                        <th scope="col">stafftID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Birth Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- loop through rows to get each staff details -->

                    <tr>
                        <td>2323-86-87878</td>
                        <td>Abraham</td>
                        <td>Amon</td>
                        <td>Akyo/td>
                        <td>M</td>
                        <td>a@a</td>
                        <td>12/2/1997</td>
                        <td>akyo</td>
                        <td>12/5/1987</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
