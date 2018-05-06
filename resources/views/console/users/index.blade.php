<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Melek Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/nanoscroller.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/nanoscroller.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/menu-light.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-navbar fixed-sidebar">
    <!-- Static navbar -->
    <!-- Simple splash screen-->
    <div class="splash">
        <div class="splash-title">
            <div class="spinner">
                <img src="{{ asset('images/loading-new.gif') }}" alt=""/>
            </div>
        </div>
    </div>
    <!--[if lt IE 7]>
    <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('layout.header')

    <section class="page">

        @include('layout.menu')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>
                                Users
                                <small>/ {{ count($users) }} results</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">Users</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-card ">
                            <!-- Start .panel -->
                            <div class="panel-body">
                                <div>
                                    <table id="basic-datatables" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>Enabled</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End .panel -->  
                    </div><!--end .col-->
                </div><!--end .row-->
            </div>
            <div style="clear:both;"></div>
        </div>

    </section>
    
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/data-tables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/data-tables/dataTables.tableTools.js') }}"></script>
    <script src="{{ asset('js/data-tables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/data-tables/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <!-- <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/data-tables/tables-data.js') }}"></script> 

</body>
</html>