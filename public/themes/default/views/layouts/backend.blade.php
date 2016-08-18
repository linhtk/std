<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; STD Group</title>

        <link rel="stylesheet" href="{{ theme('css/backend.css') }}">
        <link href="{{ theme('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ theme('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        <link href="{{ theme('css/animate.css') }}" rel="stylesheet">
        <link href="{{ theme('css/style.css') }}" rel="stylesheet">
        <script src="{{ theme('js/all.js') }}"></script>
    </head>
    <body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $admin->name }}</strong>
                             </span></span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="{{ route('backend.dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('backend.users.index') }}">Users</a>
                </li>
                <li>
                    <a href="{{ route('backend.pages.index') }}">Menus</a>
                </li>
                <li>
                    <a href="{{ route('backend.language.index') }}">Languages</a>
                </li>
                <li>
                    <a href="{{ route('backend.config.index') }}">Configuration</a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ route('auth.logout') }}">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row wrapper border-bottom white-bg page-heading">
                <h2>@yield('title')</h2>
                <div class="col-lg-10">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('backend.dashboard')}}">Home</a>
                        </li>
                        @for($i = 0; $i <= count(Request::segments()); $i++)
                            @if($i > 1)
                            <li>
                              @if( Request::segment($i) == 'pages')
                                  Menus
                                  @else
                                  {{Request::segment($i)}}
                                  @endif
                            </li>
                            @endif
                            @endfor
                    </ol>
                </div>
            </div>
           
           @if($errors->any())
                <div class="alert alert-danger">
                    <strong>We found some errors!</strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($status)
                <div class="alert alert-info">
                    {{ $status }}
                </div>
            @endif
            <div class="row">
                @yield('content')
            </div>
        </div>

</div>

<!-- Mainly scripts -->
<script src="{{ theme('js/jquery-2.1.1.js')}}"></script>
<script src="{{ theme('js/bootstrap.min.js')}}"></script>
<script src="{{ theme('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{ theme('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ theme('js/inspinia.js')}}"></script>
<script src="{{ theme('js/plugins/pace/pace.min.js')}}"></script>


</body>

</html>

