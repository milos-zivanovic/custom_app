<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!-- END META -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Magacin - Login</title>


        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" srt="assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" srt="assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    
    <body class="menubar-hoverable header-fixed ">

        <section class="section-account">
            <div class="img-backdrop" style="background-image: url('assets/img/img16.jpg')"></div>
            <div class="spacer"></div>
            <div class="card contain-sm style-transparent">
                <div class="card-body">

                    @yield('content')

                </div>
            </div>
        </section>

        <!-- BEGIN JAVASCRIPT -->
        <script srt="{{ URL::to('/') }}/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/libs/bootstrap/bootstrap.min.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/libs/spin.js/spin.min.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/libs/autosize/jquery.autosize.min.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/App.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/AppNavigation.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/AppOffcanvas.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/AppCard.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/AppForm.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/AppNavSearch.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/source/AppVendor.js"></script>
        <script srt="{{ URL::to('/') }}/assets/js/core/demo/Demo.js"></script>
        <!-- END JAVASCRIPT -->

    </body>
</html>