@extends('../layout')

@push('css')

    <link rel="stylesheet" href="{{asset('css/addEmployee.css')}}">

@endpush

@section('content')
    <div class="modal fade" id="modal-addEmployee" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <h1>Add Employee</h1>
                    <form id="regForm" class="pb-3" action="/action_page.php">
                        <div class="tab">Personal Information:
                            <p><input class="form-control uppercase" placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                            <p><input class="form-control uppercase" placeholder="Middle name..." oninput="this.className = ''" name="mname"></p>
                            <p><input class="form-control uppercase" placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                            {{-- <p><input class="form-control upper-case" onkeypress="return false;" oninput="this.className = ''" name="bdate" id="bdate"></p> --}}
                        </div>
                        <div class="tab">Contact Info:
                            <p><input class="form-control" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                            <p><input class="form-control" placeholder="Mobile number..." oninput="this.className = ''" name="phone"></p>
                        </div>
                        <div class="tab">Birthday:
                            <p><input class="form-control" placeholder="dd" oninput="this.className = ''" name="dd"></p>
                            <p><input class="form-control" placeholder="mm" oninput="this.className = ''" name="nn"></p>
                            <p><input class="form-control" placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
                        </div>
                        <div class="tab">Login Info:
                            <p><input class="form-control" placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                            <p><input class="form-control" placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                            <button type="button" id="prevBtn">Previous</button>
                            <button type="button" id="nextBtn">Next</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                <div id="userInfo" class="container-fluid tab-pane active">
                    <div class="card shadow-lg">
                      <div class="card-body table-responsive">
                          <button id="add" class="btn btn-success float-right mb-2"><i class="fas fa-plus"></i></button>
                          <table class="table table-bordered">
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
                                      <td class="text-center">
                                          {{-- <div class="row"> --}}
                                              {{-- <div class="col-md-6"> --}}
                                                  <button type="button" name="" id="" class="btn btn-info"><i class="fas fa-bars"></i></button>
                                              {{-- </div>
                                              <div class="col-md-6"> --}}
                                                  <button type="button" name="" id="" class="btn btn-primary"><i class="far fa-edit"></i></button>
                                                  <button type="button" name="" id="" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                              {{-- </div> --}}
                                          {{-- </div> --}}
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/addEmployee.js')}}"></script>
    <script>
        $('#bdate').datepicker({
            dateFormat: 'MM dd, yy'
        });

        $('#bdate').on('keydown', function(){
            var key = event.keyCode || event.charCode;

            if( key == 8 || key == 46 )
            return false;
        })

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
