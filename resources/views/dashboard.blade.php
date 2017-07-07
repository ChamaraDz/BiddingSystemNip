@extends('layouts.dashboardHead')

@section('content')
    @include('includes.message-block')
















        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="dashboard.php" class="logo"> <span class="logo-mini"><b>N</b>K</span> <span class="logo-lg"><b>Nippon</b> Kuruma</span> </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span> </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 4 messages
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                <div class="pull-left">
                                                    <img src="src/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div> <h4> Jerad Lee <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                <p>
                                                    This is a samaple Text
                                                </p> </a>
                                            </li>
                                            <!-- end message -->

                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                <div class="pull-left">
                                                    <img src="src/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div> <h4> Jerad Lee <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                <p>
                                                    This is a samaple Text
                                                </p> </a>
                                            </li>

                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                <div class="pull-left">
                                                    <img src="src/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div> <h4> Jerad Lee <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                <p>
                                                    This is a samaple Text
                                                </p> </a>
                                            </li>

                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                <div class="pull-left">
                                                    <img src="src/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div> <h4> Jerad Lee <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                <p>
                                                    This is a samaple Text
                                                </p> </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="pages/mailbox/mailbox.php">See All Messages</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">10</span> </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 10 notifications
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> Notification </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> Notification </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> Notification </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> Notification </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> Notification </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">

                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 9 tasks
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- Task item -->
                                                <a href="#"> <h3> Design some buttons <small class="pull-right">20%</small></h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div> </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="#"> <h3> Create a nice theme <small class="pull-right">40%</small></h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div> </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="#"> <h3> Some task I need to do <small class="pull-right">60%</small></h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div> </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="#"> <h3> Make beautiful transitions <small class="pull-right">80%</small></h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div> </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="src/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Neville Kingston</span> </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="src/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Neville Kingston - Web Developer
                                            <small>Member since June. 2017</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="src/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>
                                Neville Kingston
                            </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">
                            MAIN NAVIGATION
                        </li>
                        <li class="active ">
                            <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>

                        </li>

                        <li class="">
                            <a href="pages/layout/manage-dealers.php"> <i class="fa fa-user"></i> <span>Manage Dealers </span> </a>
                        </li>

                        <li class="">
                            <a href="pages/layout/manage-vehicles.php   "> <i class="fa fa-car"></i> <span>Manage Vehicles </span> </a>
                        </li>

                        <li class="">
                            <a href="pages/layout/manage-stock-request.php"> <i class="fa fa-wrench"></i> <span>Manage Stock Request</span> </a>
                        </li>

                        <li class="">
                            <a href="pages/layout/manage-machinery.php"> <i class="fa fa-magnet"></i> <span>Manage Machinery </span> </a>
                        </li>

                        <li class="treeview">
                            <a href="pages/layout/manage-equipment.php"> <i class="fa fa-empire"></i> <span>Manage Equipment's </span> </a>
                        </li>

                        <li class="treeview">
                            <a href="pages/layout/manage-spare-parts.php"> <i class="fa fa-database"></i> <span>Manage Spare Parts </span> </a>
                        </li>

                        <li class="treeview">
                            <a href="pages/layout/manage-other-items.php"> <i class="fa fa-xing-square"></i> <span> Manage Other items </span> </a>
                        </li>

                        <li class="treeview">
                            <a href="pages/layout/manage-auctions.php"> <i class="fa fa-car"></i> <span> Manage Auctions </span> </a>
                        </li>

                        <li class="treeview">
                            <a href="pages/layout/manage-home.php"> <i class="fa fa-home"></i> <span> Manage home slider </span> </a>
                        </li>

                        <li class="treeview">
                            <a href="pages/layout/manage-users.php"> <i class="fa fa-user"></i> <span> Manage users </span> </a>
                        </li>
                         
                         <li class="treeview">
                            <a href="pages/layout/manage-bidding.php"> <i class="fa fa-cubes"></i> <span> Manage Bidding </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="pages/layout/manage-offer.php"> <i class="fa fa-cubes"></i> <span> Manage offer </span> </a>
                        </li>

                        <li class="header">
                            MAIN SETTINGS
                        </li>
                        <li class="treeview">
                        <li>
                            <a href="pages/layout/manage-machinery-cate.php"> <i class="fa fa-camera-retro"></i> <span>Manage Machinery Category</span> </a>

                        </li>

                        <li>
                            <a href="pages/layout/sub-machinery-cate.php"> <i class="fa fa-magnet"></i> <span> Sub Machinery Category</span> </a>
                        </li>
                        <li>
                            <a href="pages/layout/manage-spare-parts-cate.php"> <i class="fa fa-crosshairs"></i> <span> Manage Spare Part Category</span> </a>
                        </li>
                        <li>
                            <a href="pages/layout/manage-cate.php"> <i class="fa fa-cart-arrow-down"></i> <span>Manage Categories </span> </a>
                        </li>
                        <li>
                            <a href="pages/layout/manage-sub-cate.php"> <i class="fa fa-car"></i> <span>Manage Sub Categories </span> </a>
                        </li>
                        <li>
                            <a href="pages/layout/manage-types.php"> <i class="fa fa-bolt"></i> <span>Manage Types</span> </a>
                        </li>
                        <li>
                            <a href="pages/layout/manage-sub-types.php"> <i class="fa fa-bicycle"></i> <span>Manage Sub Types</span> </a>
                        </li>
                        <li>
                            <a href="pages/layout/manage-country.php"> <i class="fa fa-building-o"></i> <span>Manage Country Rules </span> </a>
                        </li>

                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1> NK Dashboard </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#"><i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class="active">
                            Dashboard
                        </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Auctions</span>
                                    <span class="info-box-number">90,000<small></small></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Users</span>
                                    <span class="info-box-number">210</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pending</span>
                                    <span class="info-box-number">760</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">New Clients</span>
                                    <span class="info-box-number">2,000</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">
                            <!-- MAP & BOX PANE -->

                            <!-- /.box -->
                            <div class="row">

                                <!-- /.col -->

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- TABLE: LATEST ORDERS -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Latest Auctions</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Text</th>
                                                    <th>Text</th>
                                                    <th>Text</th>
                                                    <th>Text</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                    <td>Sample Text</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                        Sample Text
                                                    </div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Edit</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Auctions</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">

                <strong>Copyright &copy; 2017 <a href="">Lanka Designer Solutions</a>.</strong> All rights
                reserved.
            </footer>

        </div>
        <!-- ./wrapper -->
















<!--

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
            @foreach($posts as $post)
                <article class="post" data-postid="{{ $post->id }}">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Posted by {{ $post->user->first_name }} on {{ $post->created_at }}
                    </div>
                    <div class="interaction">
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'  }}</a> |
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'  }}</a>
                        @if(Auth::user() == $post->user)
                            |
                            <a href="#" class="edit">Edit</a> |
                            <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div> 
        </div>
    </div>

    -->

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
        var urlLike = '{{ route('like') }}';
    </script>
@endsection