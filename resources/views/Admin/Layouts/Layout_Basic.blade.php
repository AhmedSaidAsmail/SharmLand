<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin C-Panel | @yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('adminlte/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/_all-skins.min.css')}}">
        @yield('Extra_Css')
    </head>
    <body class="hold-transition skin-black-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo"> <span class="logo-mini"><b>A</b>LT</span> <span class="logo-lg"><b>Admin</b>C-Panel</span> </a>
                <nav class="navbar navbar-static-top"> <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('images/admin/administrator.png')}}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{{Auth::user()->email}} </span> </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header"> <img src="{{asset('images/admin/administrator.png')}}" class="img-circle" alt="User Image">
                                        <p> {{Auth::user()->email}} <small>Member since {{Auth::user()->created_at}}</small> </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
                                        <div class="pull-right"> <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a> </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image"> <img src="{{asset('images/admin/administrator.png')}}" class="img-circle" alt="User Image"> </div>
                        <div class="pull-left info">
                            <p>{{Auth::user()->name}}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                            </span> </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview"> <a href="{{route('welcome')}}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>  </a>

                        </li>
                        <li class="treeview{{(isset($activeMaincategory))?' active':''}}"> <a href="#"> <i class="fa fa-files-o"></i> <span>Main Category</span> <span class="pull-right-container">
                                    <span class="label label-primary pull-right">{{App\MyModels\Admin\Basicsort::count()}}</span> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('MainCategory.index')}}"><i class="fa fa-circle-o"></i> Main Category Manager</a></li>
                            </ul>
                        </li>
                        <li class="treeview{{(isset($activeCategory))?' active':''}}"> <a href=""> <i class="fa fa-th"></i> <span>Categories</span>
                                <span class="pull-right-container"> <small class="label pull-right bg-green">{{App\MyModels\Admin\Sort::count()}}</small> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('Category.index')}}"><i class="fa fa-circle-o"></i> Categories Manager</a></li>
                            </ul>
                        </li>
                        <li class="treeview{{(isset($activeItems))?' active':''}}"> <a href="#"> <i class="fa fa-pie-chart"></i> <span>Items</span>
                                <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('Items.index')}}"><i class="fa fa-circle-o"></i> Items Manager</a></li>
                            </ul>
                        </li>
                        <li class="treeview"> <a href="#"> <i class="fa fa-laptop"></i> <span>UI Elements</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                            </ul>
                        </li>
                        <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li> <a href="../calendar.html"> <i class="fa fa-calendar"></i> <span>Calendar</span> <span class="pull-right-container"> <small class="label pull-right bg-red">3</small> <small class="label pull-right bg-blue">17</small> </span> </a> </li>
                        <li> <a href="../mailbox/mailbox.html"> <i class="fa fa-envelope"></i> <span>Mailbox</span> <span class="pull-right-container"> <small class="label pull-right bg-yellow">12</small> <small class="label pull-right bg-green">16</small> <small class="label pull-right bg-red">5</small> </span> </a> </li>
                        <li class="treeview"> <a href="#"> <i class="fa fa-folder"></i> <span>Examples</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                                <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                            </ul>
                        </li>
                        <li class="treeview"> <a href="#"> <i class="fa fa-share"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li> <a href="#"><i class="fa fa-circle-o"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li> <a href="#"><i class="fa fa-circle-o"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>
                        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                        <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Body Content -->
            @yield('content')
            <!-- end Body Content -->
            <!-- footer -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs"> <b>Version</b> 2.3.7 </div>
                <strong>Copyright &copy; 2016 <a href="mialto:info.matrixcode@gmail.com"> Matrix Code Micro Systems</a>.</strong> All rights
                reserved. </footer>
            <!-- end footer -->
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="{{asset('adminlte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
        <script src="{{asset('adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('adminlte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('adminlte/plugins/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('adminlte/dist/js/app.min.js')}}"></script>


        @yield('Extra_Js')
    </body>
</html>
