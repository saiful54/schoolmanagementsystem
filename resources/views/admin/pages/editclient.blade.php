@extends('admin.include')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Client</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="">
                            Basic Form Elements
                        </div>
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    {{ Form::open(array('route' => ['user.update', $alldata->id], 'enctype' => 'multipart/form-data', 'files' => 'true', 'style' => 'padding:20px', 'method' => 'PUT')) }}                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Name:</label>
                                                <div class="col-sm-10">
                                                  <input class="form-control" name="name" value="{{ $alldata->name }}">
                                                </div>
                                              </div><br><br>
                                              <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>
                                                <div class="col-sm-10">
                                                  <input class="form-control" name="email" value="{{ $alldata->email }}">
                                                </div>
                                              </div><br><br>
                                              <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">User Roll:</label>
                                                <div class="col-sm-10">
                                                  <select class="form-control" name="role">
                                                    <option value="Admin" @if($alldata->role == 'Admin') selected @endif>Admin</option>
                                                    <option value="User" @if($alldata->role == 'User') selected @endif>User</option>
                                                    <option value="Cashier Officer" @if($alldata->role == 'Cashier Officer') selected @endif>Cashier Officer</option>
                                                  </select>
                                              </div>
                                              </div><br><br>
                                              <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                  <button type="submit" class="btn btn-info">Submit</button>
                                                  <button type="reset" class="btn btn-success">Reset</button>
                                                </div>
                                              </div>
                                        </div> 
                                    {!! Form::close() !!}

                                </div>     
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection
