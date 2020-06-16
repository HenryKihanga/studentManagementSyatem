
@extends('layouts.disciplineSideBar')

@section('tabBody')


  <div class="container-fluid">
    <div class="card">
        <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
          <div class="row">
            <div class="col-3">
              <h5>List of all students</h5>
            </div>
            <div class="col-9">
              <form action="" class="form-group row">
                <div class="col-sm-9"><input type="text" name="search" class="form-control" placeholder="enter studentId or LastName"></div>
                <div class="col-sm-2"><input type="submit" name="search-submit" class="btn btn-light"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-hover ">
            <thead>
              <tr>
                <th scope="col">studentID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Class</th>
                <th scope="col">Section</th>
                <th scope="col">Birth Date</th>
              </tr>
            </thead>
            <tbody style="height: 50px ;">


                <tr >
                  <td class="filterable-cell">2018-04-2393</td>
                  <td class="filterable-cell">Jumanne</td>
                  <td class="filterable-cell">Abdallah</td>
                  <td class="filterable-cell">Muhamad</td>
                  <td class="filterable-cell">M</td>
                  <td class="filterable-cell">Form Two</td>
                  <td class="filterable-cell">A</td>
                  <td class="filterable-cell">12/3/2011</td>
                </tr>

            </tbody>
          </table>
        </div>
    </div>
  </div>




@endsection




