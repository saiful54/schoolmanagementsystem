@extends('admin.include')

@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Users List</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> All Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($alldata as $print)
                                <tr>
                                    <td>{{ $print->id }}</td>
                                    <td>{{ $print->name }}</td>
                                    <td>{{ $print->email }}</td>
                                    <td><a href="{{ route('user.edit', $print->id) }}" class="btn btn-info btn-sm" style="float:left; padding: 2px 7px; margin-right:5px">Edit</a>
                                        {{ Form::open(array('route' => ['user.destroy', $print->id], 'style' => '', 'method' => 'delete')) }}
                                        {{ Form::hidden('id', $print->id, array('class' => 'form-control')) }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm', 'style' => 'padding: 2px 7px;')) }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                <tbody>
                            </table>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection