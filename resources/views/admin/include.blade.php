<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    {{ Html::style('vendor/bootstrap/css/bootstrap.min.css') }}
    {{ Html::style('vendor/metisMenu/metisMenu.min.css') }}
    {{ Html::style('vendor/datatables-plugins/dataTables.bootstrap.css') }}
    {{ Html::style('vendor/datatables-responsive/dataTables.responsive.css') }}
    {{ Html::style('dist/css/sb-admin-2.css') }}
    {{ Html::style('vendor/morrisjs/morris.css') }}
    {{ Html::style('vendor/font-awesome/css/font-awesome.min.css') }}
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('dashboard') }}" style="margin-top:3%">School Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <!-- <i class="fa fa-user fa-fw"></i>-->
                            <img src="/img/avatar/{{ Auth::user()->avatar }}" alt="" style="height:40px; width:40px; border-radius: 50%;"> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('adduser') }}">Add User</a>
                                </li>
                                <li>
                                    <a href="{{ url('user_list') }}">Manage Users</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Teacher<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Add Teacher</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Manage Teachers</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Add Student</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Manage Students</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Guardian<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Add Guardian</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Manage Guardians</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Marksheet<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Add Marksheet</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Manage Marksheets</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                                                <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Hostel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Add Hostel</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Manage Hostel</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Sports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Award Ceremony</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Manage Annual Sports</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Accounting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('flot') }}">Income</a>
                                </li>
                                <li>
                                    <a href="{{ url('chart') }}">Expense</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        @yield('content')




    </div>
    <!-- /#wrapper -->

    
    {{ HTML::script('vendor/jquery/jquery-3.2.1.min.js') }}
    {{ HTML::script('vendor/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('vendor/metisMenu/metisMenu.min.js') }}
    {{ HTML::script('vendor/raphael/raphael.min.js') }}
    {{ HTML::script('vendor/morrisjs/morris.min.js') }}
    {{ HTML::script('data/morris-data.js') }}
    {{ HTML::script('vendor/datatables/js/jquery.dataTables.min.js') }}
    {{ HTML::script('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}
    {{ HTML::script('vendor/datatables-responsive/dataTables.responsive.js') }}
    {{ HTML::script('dist/js/sb-admin-2.js') }}

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.addrow').on('click', function(){
            addrow();
        });
        function addrow() {
            var tr= '<tr>'+
                    '<td><input type="text"></td>'+                                              
                    '<td><input type="text"></td> '+                                               
                    '<td><input type="text"></td>'+
                    '<td><input type="text"></td>'+
                    '<td><input type="button" class="remove" value="Delete"></td>'+
                    '</tr>';
            $('tbody').append(tr);
        };

       // $('.remove').on('click', function(){
            //$(this).parent().parent().remove();
        //});
    });
</script>

<script>
     $(function(){
        $('input[type="button"]').click(function(e){
            var row = $(this).closest('tr');
            row.remove()
        })
     })
</script>

</body>
</html>