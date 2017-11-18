<!DOCTYPE html>


<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Learning', 'Learning ') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div id="navbar" class="navbar-collapse collapse">


                      <ul class="nav navbar-nav">
  <a class="navbar-left" href="home"><img src="http://www.depedbataan.com/albums/12/deped_bataan_logo.png" alt="" width="50" height="50"></a>
                        <li class="navbar-left"><a href="/learner2">Learner's Form</a></li>
                        <li><a href="/grading">Grading</a></li>
                        <li><a href="/attendance">Attendance</a></li>
                        <li><a href="/dropdown">Dropout List</a></li>
                        <li><a href="#contact">Nutrition List</a></li>
                        <li><a href="#contact">Inventory List</a></li>
                          </div>
                    <!-- Branding Image -->


                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->


                        @if (Auth::guest())
                            <li><a href="{{ route('admin.login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>

                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
<div class="container">
            @if(Request::is('/'))
            @include('inc.showcase')
            @endif
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    body{



background: url('images/demo/doodles.png');
}
a{
color: #739931;
}
.page{
max-width: 60em;
margin: 0 auto;
}
table th,
table td{
text-align: left;
}
table.layout{
width: 100%;
border-collapse: collapse;
}
table.display{
margin: 1em 0;
}
table.display th,
table.display td{
border: 1px solid #B3BFAA;
padding: .5em 1em;
}

table.display th{ background: #D5E0CC; }
table.display td{ background: #fff; }

table.responsive-table{
box-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
}

@media (max-width: 30em){
  table.responsive-table{
    box-shadow: none;
  }
  table.responsive-table thead{
    display: none;
  }
table.display th,
table.display td{
  padding: .5em;
}

table.responsive-table td:nth-child(1):before{
  content: 'Number';
}
table.responsive-table td:nth-child(2):before{
  content: 'Name';
}
table.responsive-table td:nth-child(1),
table.responsive-table td:nth-child(2){
  padding-left: 25%;
}
table.responsive-table td:nth-child(1):before,
table.responsive-table td:nth-child(2):before{
  position: absolute;
  left: .5em;
  font-weight: bold;
}

  table.responsive-table tr,
  table.responsive-table td{
      display: block;
  }
  table.responsive-table tr{
      position: relative;
      margin-bottom: 1em;
  box-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
  }
  table.responsive-table td{
      border-top: none;
  }
  table.responsive-table td.organisationnumber{
      background: #D5E0CC;
      border-top: 1px solid #B3BFAA;
  }
  table.responsive-table td.actions{
      position: absolute;
      top: 0;
      right: 0;
      border: none;
      background: none;
  }
}
  </style>
</body>
</html>
