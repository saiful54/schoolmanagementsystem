@extends('admin.include')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Add User</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: aliceblue;">
                            Create New User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12" style="background:#F4F4F4; ">
                                    {{ Form::open(array('route' => 'user.store', 'enctype' => 'multipart/form-data', 'files' => 'true', 'style' => 'padding:20px', 'method' => 'post')) }}
                                        <div class="col-md-3 form-group">
                                            <input class="form-control" name="name" placeholder="Name">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input class="form-control" name="phone" placeholder="Phone No">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <select class="form-control" name="role">
                                                <option>User Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                                <option value="Cashier Officer">Cashier Officer</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-success">Reset</button>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                

                                <div class="col-lg-12" style="margin:15px"></div>

                                    <div class="col-lg-12" style="padding:20px" id="row">
                                    <table width="100%" style="background:#F4F4F4; padding:20px" class="table table-striped table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Qty</th>
                                                <th>Discount</th>
                                                <th>Price</th>                                              
                                                <th><a href="#row" class="addrow">Add Row</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text"></td>                                              
                                                <td><input type="text"></td>                                                
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><input type="button" class="remove" value="Delete"></td>
                                            </tr>                                
                                        </tbody>
                                    </table>                                
                                </div>


                                

                                <div class="col-lg-12" style="padding:20px">
                                    <table width="100%" style="background:#F4F4F4; padding:20px" class="table table-striped table-bordered" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>Mother's Name</th>                                              
                                                <th>Phone No</th>
                                                <th>Photo</th>
                                                <th>Education</th>
                                                <th>Gender</th>
                                                <th>District</th>
                                                <th width="18%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($alldata as $print)
                                            <tr class="odd gradeX">
                                                <td>{{ $print->id }}</td>
                                                <td>{{ $print->name }}</td>
                                                <td>{{ $print->fname }}</td>
                                                <td>{{ $print->mname }}</td>                                              
                                                <td>{{ $print->phone }}</td>
                                                <td><img src="img/public/{{ $print->photo }}" height="40px" width="40px"></td>
                                                
                                                <td>{{ $print->education }}</td>
                                                <td>{{ $print->gender }}</td>
                                                <td>{{ $print->district }}</td>
                                                <td>
                                                    <a href="{{ route('addform.edit', $print->id) }}">Edit</a>
                                                    

                                                    {{ Form::open(array('route' => ['addform.destroy', $print->id], 'style' => '', 'method' => 'delete')) }}
                                                    {{ Form::hidden('id', $print->id, array('class' => '')) }}
                                                    {{ Form::submit('Delete', array('class' => 'btn btn-sm', 'style' => '')) }}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            @endforeach                                 
                                        </tbody>
                                    </table>                                
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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
