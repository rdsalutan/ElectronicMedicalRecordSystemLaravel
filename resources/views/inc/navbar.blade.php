<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">DLSU-MC</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}">Home</a></li>
                @if(Auth::check())
                <li class="{{ app('request')->is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                <li class="dropdown {{ Request::is('medicalrecord','medicalrecord/create') ? 'active' : '' }}">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Records
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/medicalrecord/create') }}">New</a></li> 
                        <li><a href="{{ url('/medicalrecord') }}">View</a></li>
                    </ul>
                </li>
                <li class="dropdown {{ Request::is('patient','patient/create') ? 'active' : '' }}">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Patients
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/patient/create') }}">New</a></li> 
                        <li><a href="{{ url('/patient') }}">View</a></li>
                    </ul>
                </li>                    
                <li class="{{ app('request')->is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>