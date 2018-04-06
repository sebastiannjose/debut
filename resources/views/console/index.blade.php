<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Codex Admin Template</title>

        <!-- Bootstrap -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/waves.min.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/nanoscroller.css') }}">
        <link href="{{ asset('css/morris-0.4.3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu-light.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


        <link href="{{ asset('css/app.min.1.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/color.css') }}" rel="stylesheet">
        <link href="{{ asset('js/c3/c3.min.css') }}" rel="stylesheet">
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
        <div class="splash"><div class="splash-title"><div class="spinner">
                    <img src="{{ asset('images/loading-new.gif') }}" alt=""/>
                </div> </div> </div>
        <!--[if lt IE 7]>
        <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <nav class="navbar navbar-default yamm navbar-fixed-top" id="header"> <div class="container-fluid padding-l-r">
                <div class="left-part">
                    <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i>  Codex</a></div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="search" style="display: none;">
                        <form >
                            <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                            <span class="search-close"><i class="fa fa-times"></i></span>
                        </form>
                    </div>

                    <ul class="nav navbar-nav navbar-right navbar-top-drops">
                        <li> <span class="search-icon"><i class="fa fa-search"></i></span>

                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-xs badge-info">6</span></a>

                            <ul class="dropdown-menu dropdown-lg animated flipInX">

                                <li class="notify-title">
                                    3 New messages
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-1.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-2.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-3.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="read-more"><a href="#">View All Messages <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge badge-xs badge-warning">6</span></a>

                            <ul class="dropdown-menu dropdown-lg animated flipInX">
                                <li class="notify-title">
                                    3 New messages
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span class="media-body">
                                            15 New Messages
                                            <em>20 Minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-twitter"></i>
                                        </span>

                                        <span class="media-body">
                                            13 New Followers
                                            <em>2 hours ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-download"></i>
                                        </span>

                                        <span class="media-body">
                                            Download complete
                                            <em>2 hours ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="read-more"><a href="#">View All Alerts <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-user"></i></a>

                            <ul class="dropdown-menu dropdown-lg animated flipInX profile">

                                <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>My Inbox</a></li>
                                <li><a href="#"><i class="fa fa-barcode"></i>My Task</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-lock"></i>Screen lock</a></li>
                                <li><a href="#"><i class="fa fa-key"></i>Logout</a></li>

                            </ul>
                        </li>

                        <li><a href="#" class="button-wave right-sidebar-toggle waves-effect waves-button waves-light"><i class="fa fa-comment" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <!-- Right sidebar -->
        <div id="right-sidebar" class="animated fadeInRight col-md-12">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="fa fa-times" aria-hidden="true"></i>
            </button><div class="clearfix" style="height:10px;"></div>
            <ul class="basic-list">
                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
            </ul>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="images/avtar-1.jpg">
                </a>
                <div class="media-body">
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="images/avtar-1.jpg">
                </a>
                <div class="media-body">
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>

            <div class="feed-activity-list">

                <div class="feed-element">
                    <div>
                        <small class="pull-right text-navy">1m ago</small>
                        <strong>Monica Smith</strong>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                        <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                    </div>
                </div>



                <div class="feed-element">
                    <div>
                        <small class="pull-right">5m ago</small>
                        <strong>Anna Legend</strong>
                        <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                    </div>
                </div>
                <div class="feed-element">
                    <div>
                        <small class="pull-right">5m ago</small>
                        <strong>Damian Nowak</strong>
                        <div>The standard chunk of Lorem Ipsum used </div>
                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                    </div>
                </div>


            </div>

        </div>
        <section class="page">

            <nav class="navbar-aside navbar-static-side " id="menu">
                <div class="sidebar-collapse">

                    <ul class="nav" id="side-menu">

                        <li class="active">
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard </span><span class="label label-rouded pull-right p1-bg note-icon">1</span></a>                           
                        </li>
                        <li>
                            <a href="widgets.html"><i class="fa fa-cog"></i> <span class="nav-label">Widgets </span><span class="label label-rouded pull-right p3-bg note-icon">New 40+</span></a>

                        </li>
                        <li>
                            <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="mailbox.html">Inbox</a></li>
                                <li><a href="mail_detail.html">Email view</a></li>
                                <li><a href="mail_compose.html">Compose email</a></li>
                            </ul>
                        </li><li class="nav-heading"><span>Components</span></li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart"></i> <span class="nav-label">Graphs</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="flot_charts.html">Flot charts</a></li>
                                <li><a href="morris_js.html">Morris.js</a></li>
                                <li><a href="chart_js.html">Chart.js</a></li>
                                <li><a href="chartist.html">Chartist</a></li>
                                <li><a href="chart_sparkline.html">Sparkline</a></li>
                                <li><a href="pie_chart.html">PIE Chart</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="form_basic.html">Basic form</a></li>
                                <li><a href="form_advanced.html">Advanced form</a></li>
                                <li><a href="form_wizard.html">Wizard form</a></li>
                                <li><a href="form_masked.html">Masked form</a></li>
                                <li><a href="form_file_upload.html">File upload</a></li>
                                <li><a href="file_drop.html">File Dropzone</a></li>
                                <li><a href="form_text_editor.html">Text editor</a></li>
                                <li><a href="form_inline_edit.html">Inline edit</a></li>
                                <li><a href="form_validate.html">Form Validation</a></li>
                                <li><a href="form_tinymce.html">Tinymce Editor</a></li>
                                <li><a href="form_wysihtml5.html">WYSIHTML5 Editor</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="empty_page.html">Empty page</a></li>
                                <li><a href="gallery.html">gallery</a></li>
                                <li><a href="price_tables.html">Price tables</a></li>
                                <li><a href="page_contact.html">Contact Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="orders.html">orders</a></li>
                                <li><a href="order-view.html">order View</a></li>
                                <li><a href="products.html">Products</a></li>


                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-hourglass-o"></i> <span class="nav-label">Icons</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="weather-icon.html">Weather Icons</a></li>
                                <li><a href="themifyicons.html">Themify Icons</a></li>
                                <li><a href="linea_arrows.html">Linea Arrows Icons</a></li>
                                <li><a href="linea_basic.html">Linea Basic Icons</a></li>
                                <li><a href="linea_elaboration.html">Linea Basic Elaboration Icons</a></li>
                                <li><a href="linea_ecommerce.html">Linea Ecommerce Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="video.html">Video</a></li>
                                <li><a href="tabs_panels.html">Panels</a></li>
                                <li><a href="tabs.html">Tabs</a></li><li><a href="chat.html">Chat</a></li>
                                <li><a href="alert_notifications.html">Alert & notifications</a></li>
                                <li><a href="tree_view.html">Tree View</a></li>
                                <li><a href="timeline.html">Time Line</a></li>
                                <li><a href="progress_bar.html">Progress Bar</a></li>
                                <li><a href="sliders.html">OWL Carousel</a></li>
                                <li><a href="range_slider.html">Range Slider</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="alert_popup.html">Alert Popup</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="models.html">Modals Popup</a></li>
                                <li><a href="toastr_alert.html">Toastr Alert</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span><span class="label label-rouded pull-right p2-bg note-icon">New</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse"><li><a href="table_basic.html">Static Tables</a></li>
                                <li><a href="table_data_tables.html">Data Tables</a></li>
                                <li><a href="table_responsive.html">Responsive Tables</a></li>
                                <li><a href="table_editable.html">Editable Tables</a></li>
                                <li><a href="table_jsgrid.html">JSGrid Tables</a></li>

                            </ul>
                        </li><li class="nav-heading"><span>More</span></li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="user_profile.html">profile</a></li>
                                <li><a href="user_list.html">User list</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">maps</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="google_maps.html">Google maps</a></li>
                                <li><a href="vector_maps.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Blog</span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="blog_list.html">Blog list</a></li>
                                <li><a href="blog_post.html">Blog post</a></li>
                            </ul>
                        </li>
                        <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="nav-label">Calendar </span><span class="label label-rouded pull-right p2-bg note-icon">New</span></a></li>

                        <li>
                            <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa fa-plus"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#">Third Level <span class="fa fa-plus"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li> <li><a href="#">Second Level Item</a></li>
                            </ul>
                        </li><li class="nav-heading"><span>Extra</span></li>
                    </ul>
                    <div class="row">
                        <div class="left-bar">


                            <div class="map_progress">
                                <h4>Unique Visitors</h4>
                                <span><small>Last Week Rise by 62%</small></span>
                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>

                                <h4>Registrations</h4>
                                <span><small>Up by 57% last 7 days</small></span>
                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>

                                <h4>Direct Sales</h4>
                                <span><small>Last Month Rise by 22%</small></span>
                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                            </div>
                        </div>
                    </div>


                </div>
            </nav>

            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>Dashboard<small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->



                    <div class="row row-md">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">1,325</h1>
                                    <h6 class="text-uppercase">Orders</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-bar-chart"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">$ 47,855</h1>
                                    <h6 class="text-uppercase">Revenue</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-package"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">6,800</h1>
                                    <h6 class="text-uppercase">Products</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-receipt"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">1,682</h1>
                                    <h6 class="text-uppercase">Sold</h6>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Product Data</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="pdata" ></div>
                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-lg-8">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Product Order</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div class="table-responsive table-commerce">
                                        <table id="basic-datatables" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:80px">
                                                        <strong>ID</strong>
                                                    </th>

                                                    <th>
                                                        <strong>CLIENT NAME</strong>
                                                    </th>
                                                    <th>
                                                        <strong>AMOUNT</strong>
                                                    </th>
                                                    <th>
                                                        <strong>QUANTITY</strong>
                                                    </th>
                                                    <th>
                                                        <strong>SHIPMENT</strong>
                                                    </th>
                                                    <th class="text-center">
                                                        <strong>STATUS</strong>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>  <tr>
                                                    <td>0001</td>

                                                    <td>Addison Nichols</td>
                                                    <td>$ 515.20</td>
                                                    <td>547</td>
                                                    <td>04/10/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Standby</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>0001</td>

                                                    <td>Addison Nichols</td>
                                                    <td>$ 515.20</td>
                                                    <td>547</td>
                                                    <td>04/10/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Standby</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>0002</td>

                                                    <td>Albert Watkins</td>
                                                    <td>$ 22.30</td>
                                                    <td>122</td>
                                                    <td>06/10/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-success">Paid</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>0003</td>

                                                    <td>Johnny Fernandez</td>
                                                    <td>$ 31.4</td>
                                                    <td>68</td>
                                                    <td>28/09/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Standby</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>00011</td>

                                                    <td>Gilbert Edwards</td>
                                                    <td>$ 5115.12</td>
                                                    <td>51</td>
                                                    <td>-</td>
                                                    <td class="text-center">
                                                        <span class="label label-inverse">Canceled</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>00012</td>

                                                    <td>Norman Hill</td>
                                                    <td>$ 5124.13</td>
                                                    <td>41</td>
                                                    <td>-</td>
                                                    <td class="text-center">
                                                        <span class="label label-purple">Shipped</span>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- End .panel -->
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Total Money Spent</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="morris-bar-chart" ></div>
                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Analytic Record</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="morris-line-chart"></div>

                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-lg-4">

                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Spark Line</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="timeseriesChart" style="height:350px;"></div>

                                </div>
                            </div><!-- End .panel -->



                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-card margin-b-30">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> User Activity</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="feed-activity-list">

                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right text-navy">1m ago</small>
                                                <strong>Monica Smith</strong>
                                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">2m ago</small>
                                                <strong>Jogn Angel</strong>
                                                <div>There are many variations of passages of Lorem Ipsum available</div>
                                                <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Jesica Ocean</strong>
                                                <div>Contrary to popular belief, Lorem Ipsum</div>
                                                <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Monica Jackson</strong>
                                                <div>The generated Lorem Ipsum is therefore </div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                            </div>
                                        </div>


                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Anna Legend</strong>
                                                <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Damian Nowak</strong>
                                                <div>The standard chunk of Lorem Ipsum used </div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Gary Smith</strong>
                                                <div>200 Latin words, combined with a handful</div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-card margin-b-30">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Statistics</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div>
                                        <h4>Messages <span class="badge badge-info pull-right">16</span></h4>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="images/avtar-1.jpg">
                                            </a>
                                            <div class="media-body">
                                                There are many variations of passages of Lorem Ipsum available.
                                                <br>
                                                <small class="text-muted">Today 4:21 pm</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="images/avtar-2.jpg">
                                            </a>
                                            <div class="media-body">
                                                TIt is a long established fact that.
                                                <br>
                                                <small class="text-muted">Yesterday 2:45 pm</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="images/avtar-3.jpg">
                                            </a>
                                            <div class="media-body">
                                                Many desktop publishing packages.
                                                <br>
                                                <small class="text-muted">Yesterday 1:10 pm</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="images/avtar-3.jpg">
                                            </a>
                                            <div class="media-body">
                                                Many desktop publishing packages.
                                                <br>
                                                <small class="text-muted">Yesterday 1:10 pm</small>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="m-t-md">
                                        <h4>Statistics</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                        <div class="row m-t-sm">
                                            <div class="col-md-6">
                                                <span class="bar" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#1ab394" x="0" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="3.3" y="10.666666666666668" width="2.3" height="5.333333333333333"></rect><rect fill="#1ab394" x="6.6" y="0" width="2.3" height="16"></rect><rect fill="#d7d7d7" x="9.899999999999999" y="5.333333333333334" width="2.3" height="10.666666666666666"></rect><rect fill="#1ab394" x="13.2" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="16.5" y="0" width="2.3" height="16"></rect><rect fill="#1ab394" x="19.799999999999997" y="3.555555555555557" width="2.3" height="12.444444444444443"></rect><rect fill="#d7d7d7" x="23.099999999999998" y="10.666666666666668" width="2.3" height="5.333333333333333"></rect><rect fill="#1ab394" x="26.4" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="29.7" y="12.444444444444445" width="2.3" height="3.5555555555555554"></rect></svg>
                                                <h5><strong>169</strong> Posts</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="line" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666 32 15"></polygon><polyline fill="transparent" points="0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg>
                                                <h5><strong>28</strong> Orders</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-md">
                                        <h4>Discussion</h4>
                                        <div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <span class="badge badge-primary">16</span>
                                                    General topic
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="badge badge-info">12</span>
                                                    The generated Lorem
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-warning">7</span>
                                                    There are many variations
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-box clearfix">
                                <div class="pull-center">
                                    <h4>User Performance</h4>
                                    <h2>17,50</h2>
                                </div>
                                <div class="text-center">
                                    <i class="pe-7s-graph1 fa-4x"></i>

                                    <h1 class="m-xs">$1 206,90</h1>

                                    <h3 class="font-extra-bold no-margins text-success">
                                        All Income
                                    </h3>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget-box clearfix">
                                <div>

                                    <h4>Users Activity</h4>

                                    <div class="m-t-xl">
                                        <h2>210</h2><br />
                                        <span class="font-bold no-margins">
                                            Social users
                                        </span>

                                        <div class="progress m-t-xs full progress-small">
                                            <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
                                                 role="progressbar" class=" progress-bar progress-bar-success">
                                                <span class="sr-only">35% Complete (success)</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <small class="stats-label">Pages / Visit</small>
                                                <h4>7.80</h4>
                                            </div>

                                            <div class="col-xs-6">
                                                <small class="stats-label">% New Visits</small>
                                                <h4>76.43%</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-box clearfix p3-bg">
                                <div>
                                    <div class="pad-all">
                                        <h2> HDD Usage</h2><br/>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">132Gb</span>
                                            Free Space
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">1,45Gb</span>
                                            Used space
                                        </p>
                                    </div>
                                    <div class="pad-all text-center">
                                        <!--Placeholder--><br/>
                                        <div id="demo-sparkline-area"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-box clearfix">
                                <div>
                                    <h2><i class="fa fa-tasks pull-right p4-color"></i></h2>
                                    <h4>Pending Orders</h4>
                                    <h2>256</h2>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-card ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Visitors location</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div id="world-map" style="width: 100%; height: 280px"></div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="map_progress">
                                                <h4>Unique Visitors</h4>
                                                <span><small>Last Week Rise by 62%</small></span>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>

                                                <h4>Registrations</h4>
                                                <span><small>Up by 57% last 7 days</small></span>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>

                                                <h4>Direct Sales</h4>
                                                <span><small>Last Month Rise by 22%</small></span>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .panel -->
                        </div>
                    </div>

                </div>
                <div style="clear:both;"></div>
            </div>
        </section>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/jquery.nanoscroller.min.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <!-- Flot -->
        <script src="js/flot/jquery.flot.js"></script>
        <script src="js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/flot/jquery.flot.resize.js"></script>
        <script src="js/flot/jquery.flot.pie.js"></script>
        <script src="js/flot/curved-line-chart.js"></script>
        <script src="js/chartjs/Chart.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/morris_chart/raphael-2.1.0.min.js"></script>
        <script src="js/morris_chart/morris.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>

        <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
        <script type="text/javascript" src="js/custom.js"></script>
        <!-- ChartJS-->
        <script src="js/chartjs/Chart.min.js"></script>

        <!--page js-->
        <script src="js/moment.min.js"></script>
        <script src="js/c3/d3.v3.min.js" charset="utf-8"></script>
        <script src="js/jquery.simpleWeather.min.js"></script>
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/c3/c3.min.js"></script>
        <script src="js/index.js"></script>
    </body>

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/codex/v1.1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 02:27:13 GMT -->
</html>
