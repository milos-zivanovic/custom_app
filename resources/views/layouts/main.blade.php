<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Magacin</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/bootstrap.css?1422792965"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/materialadmin.css?1425466319"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/font-awesome.min.css?1422529194"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/material-design-iconic-font.min.css?1421434286"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990"/>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->

        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>

    
    <body class="menubar-hoverable header-fixed ">
        
        <header id="header">
            <div class="headerbar">
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand">
                            <div class="brand-holder">
                                <a href="home">
                                    <span class="text-lg text-bold text-primary">CUSTOM APPLICATION</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="headerbar-right">
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="assets/img/avatar1.jpg?1403934956" alt=""/>
                                <span class="profile-info">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off text-danger"></i>Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        
        <div id="base">
            <div id="content">
                @yield('content')
            </div>
            
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar"
                           href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="dashboard">
                            <span class="text-lg text-bold text-primary ">ADMIN&nbsp;PANEL</span>
                        </a>
                    </div>
                </div>
                <div class="menubar-scroll-panel">
                    <ul id="main-menu" class="gui-controls">
                        <li class="active">
                            <a href="/home">
                                <div class="gui-icon"><i class="md md-home"></i></div>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                            
                        <li class="gui-folder">
                            <a href="#">
                                <div class="gui-icon"><i class="fa fa-list"></i></div>
                                <span class="title">Users</span>
                            </a>
                            <ul>
                                <li><a href="#" ><span class="title">Category 1</span></a></li>
                                <li><a href="#" ><span class="title">Category 2</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="{{ URL::to('/') }}/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/spin.js/spin.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/App.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/AppNavigation.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/AppOffcanvas.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/AppCard.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/AppForm.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/AppNavSearch.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/source/AppVendor.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/demo/Demo.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/core/demo/DemoTableDynamic.js"></script>
    </body>
</html>