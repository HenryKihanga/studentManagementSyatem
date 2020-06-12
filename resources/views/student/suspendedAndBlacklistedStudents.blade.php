
@extends('layouts.sideBar')

@section('tabBody')
<div class="container-fluid">
<div class="card">
    <div class="card-body">
      <h3>NO STUDENT WHO HAS BEEN SUSPENDED</h3>
    </div>
    <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
      <div class="row">
        <div class="col-3">
          <h5>List of suspended students</h5>
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
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">studentID</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>2014-23-2323</td>
            <td>Henry </td>
            <td>Abdully</td>
            <td>Jumanne</td>
            <td>M</td>
            <td>12/12/2029</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<hr>

<div class="container-fluid">
  <div class="card">
    <div class="card-body" style="background: #19B3D3; color : #FFFFFF">
      <div class="row">
        <div class="col-3">
          <h5>List of blacklisted students</h5>
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
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">studentID</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>2014-23-2323</td>
            <td>Henry </td>
            <td>Abdully</td>
            <td>Jumanne</td>
            <td>M</td>
            <td>12/12/2029</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
          <tr>

            <td>2014-23-2323</td>
            <td>Abdull </td>
            <td> </td>
            <td>Yahya</td>
            <td>M</td>
            <td>18/2/1998</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection




