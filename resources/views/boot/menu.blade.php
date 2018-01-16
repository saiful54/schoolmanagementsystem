  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background:#4A423F">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('website') }}">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
			       {{ HTML::link('home', 'Home', array('class' => 'nav-link js-scroll-trigger'))}}
            </li>
			<!--<li class="nav-item"><a href="{{ url('boot.service') }}">Some Text</a></li>-->
            <li class="nav-item">
			       {{ HTML::link('addform/show', 'Services', array('class' => 'nav-link js-scroll-trigger'))}}
            </li>
            <li class="nav-item">
             {{ HTML::link('saif/create', 'AddStudent', array('class' => 'nav-link js-scroll-trigger'))}}
            </li>
            <li class="nav-item">
			       {{ HTML::link('#portfolio', 'Portfolio', array('class' => 'nav-link js-scroll-trigger'))}}
            </li>
            <li class="nav-item">
			       {{ HTML::link('#contact', 'Contact', array('class' => 'nav-link js-scroll-trigger'))}}
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            
          </ul>
        </div>
      </div>
    </nav>