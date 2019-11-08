@extends('../layout')

@section('content')
    
    <div class="container-fluid">
        <div class="mb-2">
            <ul class="nav nav-tabs sticky-top bg-white">
                <li id="btn-attendance" class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#userInfo">Users List</a>
                </li>
                <li id="btn-inBetween" class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#addUser">Wala pa dito</a>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div id="userInfo" class="container-fluid tab-pane">
                    <div class="card text-white bg-dark shadow-lg">
                      <div class="card-body table-responsive">
                          <table class="table table-bordered text-white">
                              <thead>
                                  <tr>
                                      <th class="text-center" colspan=4><h3><i>EMPLOYEE INFORMATION TABLE</i></h3></th>
                                  </tr>
                                  <tr>
                                      <th>Employee No.</th>
                                      <th>Full Name</th>
                                      <th>Position</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>2019-1234</td>
                                      <td>VERGARA, JOHN REE CENIZA</td>
                                      <td>IT PROGRAMMER ASSOCIATE</td>
                                      <td style="width: 20%;">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <button type="button" name="" id="" class="btn btn-info btn-block">Details</button>
                                              </div>
                                              <div class="col-md-6">
                                                  <button type="button" name="" id="" class="btn btn-primary btn-block">Edit</button>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
                <div id="addUser" class="container-fluid tab-pane active">
                    <div class="row">
                        <div class="col-8 mx-auto">
                            <div class="card text-white bg-dark shadow-lg">
                                <div class="card-body">
                                    <h3 align="center"><i>NEW EMPLOYEE INFORMATION</i></h3>
                                    <form method="post" action="" id="newEmployeeForm">
                                        @csrf
                                        <table class="table table-bordered table-inverse text-white">
                                            <tbody>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3">Employee No.:</td>
                                                        <td>
                                                            <span id="employeeNumber" class="uppercase rounded-0 form-control"></span>
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="firstname">First Name:</label></td>
                                                        <td>
                                                            <input type="text" name="firstname" id="firstname" class="uppercase rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="middlename">Middle Name:</label></td>
                                                        <td>
                                                            <input type="text" name="middlename" id="middlename" class="uppercase rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="lastname">Last Name:</label></td>
                                                        <td>
                                                            <input type="text" name="lastname" id="lastname" class="uppercase rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="department">Department:</label></td>
                                                        <td>
                                                            <input type="text" name="department" id="department" class="uppercase rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="position">Position:</label></td>
                                                        <td>
                                                            <input type="text" name="position" id="position" class="uppercase rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="superior">Superior:</label></td>
                                                        <td>
                                                            <input type="text" name="superior" id="superior" class="uppercase rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered table-inverse text-white">
                                            <tbody>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="email">Email:</label></td>
                                                        <td>
                                                            <input type="text" name="email" id="email" class="rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="username">Username:</label></td>
                                                        <td>
                                                            <input type="text" name="username" id="username" class="rounded-0 form-control" aria-describedby="helpId">
                                                        </td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div class="form-group">
                                                        <td style="width: 20%;" class="pt-3"><label for="password">Password:</label></td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="password" name="password" id="password" class="rounded-0 form-control" aria-describedby="helpId">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="input-group-text" id="passwordEye" style="width: 40px;"><i class="far fa-eye-slash"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-6">
                                            </div>    
                                            <div class="col-3">
                                                <button id="clear" type="button" class="btn btn-info form-control">Clear</button>
                                            </div>    
                                            <div class="col-3">
                                                <button type="submit" class="btn btn-success form-control">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var randomNumber = Math.floor(Math.random() * 10000) + 1;
        $('#employeeNumber').text('2019-' + randomNumber);

        $('#clear').click(function(){
            $('#newEmployeeForm').find('input').val('');
        });

        $('#passwordEye').click(function(){
            var passwordType = $('#password').attr('type');

            if(passwordType == 'password'){
                $('#password').attr('type', 'text');
                $('#passwordEye').html(`<i class="far fa-eye"></i>`);
            }
            else{
                $('#password').attr('type', 'password');
                $('#passwordEye').html(`<i class="far fa-eye-slash"></i>`);
            }

        });
    </script>

@endsection