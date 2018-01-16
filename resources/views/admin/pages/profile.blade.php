@extends('admin.include')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <img src="/img/avatar/{{ Auth::user()->avatar }}" style="height: 200px;width: 180px;float: left;margin-right: 10px;border-radius: 50%;">
                            <h3>{{ Auth::user()->name }}'s Profile</h3>
                            <form enctype="multipart/form-data" action="profile" method="POST">
                                <input type="file" name="avatar"><br>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Submit">
                            </form>
                            
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

