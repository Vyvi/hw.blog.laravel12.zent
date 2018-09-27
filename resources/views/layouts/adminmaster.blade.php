<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Admin Blog</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="http://www.stickpng.com/assets/images/588a668cd06f6719692a2d1b.png" type="images/x-icon">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/skins/_all-skins.min.css')}}">

  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>V</b>V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Vy</b>Vy</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }} - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li>
          <a href="/post">
            <i class="fa fa-table"></i> <span>Quản lý bài viết</span>
            
          </a>
          
        </li>
        <li>
          <a href="/cate">
            <i class="fa fa-table"></i> <span>Quản lý danh mục</span>
            
          </a>
          
        </li>
        <li>
          <a href="/tagg">
            <i class="fa fa-table"></i> <span>Quản lý tag</span>
            
          
        </li>
        
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       @yield('adminContent')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('admin_assets/bower_components/jquery/dist/jquery.min.js')}}"></script>

<script src="{{ asset('admin_assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin_assets/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('admin_assets/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin_assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin_assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{ asset('admin_assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('admin_assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('admin_assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin_assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin_assets/dist/js/demo.js')}}"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  });
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
  $(document).ready(function() {
    $(document).on('click','.btn-show',function(e){
      $('#modal-show').modal('show');
  //lấy dữ liệu từ attribute data-url lưu vào biến url
  var url=$(this).attr('data-url');
  $.ajax({
    //sử dụng phương thức get
    type: 'get',
    url: url,
    //nếu thực hiện thành công thì chạy vào success
    success: function (response) {
      console.log(response)
      //hiển thị dữ liệu được controller trả về vào trong modal
      $('h3#title-show').text(response.data.title)
      $('h3#thumbnail-show img').attr('src' , response.data.thumbnail)
      $('h3#description-show').text(response.data.description)
      $('h3#content-show').text(response.data.content)
      $('h3#slug-show').text(response.data.slug)
      
    },
    error: function (jqXHR, textStatus, errorThrown) {
      //xử lý lỗi tại đây
    }
  });
});
  $(document).on('click','.btn-delete',function(e){
    var url=$(this).attr('data-url');
        // alert(url);
        //hiển thị dialogbox xác nhận xoá
        if (confirm("Are you sure?")){
        $.ajax({
          type: 'delete',
          url: url,
          success: function(response) {
            // toastr.warning('delete todo success!')
            alert('success');
            window.location.href="{{ route('post') }}";
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      }
  });
  $(document).on('click','.btn-edit',function(e){
        //mở modal edit lên
        $('#modal-edit').modal('show');
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        // alert(url);
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#title-edit').val(response.data.title)
            $('#thumbnail-edit').val(response.data.thumbnail)
            $('#description-edit').val(response.data.description)
            $('#content-edit').val(response.data.content)
            $('#slug-edit').val(response.data.slug)
            
            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit').attr('data-url','{{ asset('') }}resave/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      });
  $('#form-edit').submit(function (e) {
        //mở modal edit lên
        
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        // alert(url);
        $.ajax({
          //phương thức get
          type: 'put',
          url: url,
          data:{
            title: $('#title-edit').val(), 
            thumbnail: $('#thumbnail-edit').val(), 
            description: $('textarea#description-edit').val(), 
            content: $('#content-edit').val(), 
            slug: $('#slug-edit').val(),
            user_id: 1,
            category_id: 1, 
          },
          success: function (response) {
            // toastr.success('edit todo success!');
            $('#modal-edit').modal('hide');
            
            window.location.reload();
            
          },
          error: function (error) {
            
          }
        })
      })

});

  
</script>
<script>

$(function() {
    $('#posts-table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
        processing: true,
        order: [],
        serverSide: true,
        ajax: '{{route('getListPost')}}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'thumbnail', name: 'thumbnail' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action' }

            
        ]
    });
    $('#form-add').submit(function (e) {
      e.preventDefault();
      //lấy attribute data-url của form lưu vào biến url
      var url=$(this).attr('data-url');
      $.ajax({
        //sử dụng phương thức post
        type: 'post',
        url: url,
        data: {
          //lấy dữ liệu từ ô input trong form thêm mới
          
          title: $('#title-add').val(), 
          thumbnail: $('#thumbnail-add').val(), 
          description: $('textarea#description-add').val(), 
          content: $('#content-add').val(), 
          slug: $('#slug-add').val(),
          user_id: 1,
          category_id: 1, 
        
          
        },
        success: function (response) {
          // hiện thông báo thêm mới thành công bằng toastr
          
          //ẩn modal add đi
          $('#modal-add').modal('hide');
          setTimeout(function () {
            window.location.href="{{ route('post') }}";
          });
        },
        error: function (jqXHR, textStatus, errorThrown) {
          //xử lý lỗi tại đây
        }
      })
      });
});

</script>
<script>
  $(document).ready(function() {
    $(document).on('click','.btn-show-cate',function(e){
      $('#modal-show-cate').modal('show');
  //lấy dữ liệu từ attribute data-url lưu vào biến url
  var url=$(this).attr('data-url');
  $.ajax({
    //sử dụng phương thức get
    type: 'get',
    url: url,
    //nếu thực hiện thành công thì chạy vào success
    success: function (response) {
      console.log(response)
      //hiển thị dữ liệu được controller trả về vào trong modal
      $('h3#name-show-cate').text(response.data.name)
      $('h3#thumbnail-show-cate img').attr('src' , response.data.thumbnail)
      $('h3#description-show-cate').text(response.data.description)
      $('h3#slug-show-cate').text(response.data.slug)
      $('h3#parent-show-cate').text(response.data.parent_id)
      
    },
    error: function (jqXHR, textStatus, errorThrown) {
      //xử lý lỗi tại đây
    }
  });
});
  $(document).on('click','.btn-delete-cate',function(e){
    var url=$(this).attr('data-url');
        // alert(url);
        //hiển thị dialogbox xác nhận xoá
        if (confirm("Are you sure?")){
        $.ajax({
          type: 'delete',
          url: url,
          success: function(response) {
            // toastr.warning('delete todo success!')
            alert('success');
            window.location.href="{{ route('cate') }}";
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      }
  });
  $(document).on('click','.btn-edit-cate',function(e){
        //mở modal edit lên
        $('#modal-edit-cate').modal('show');
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        // alert(url);
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#name-edit-cate').val(response.data.name)
            $('#thumbnail-edit-cate').val(response.data.thumbnail)
            $('#description-edit-cate').val(response.data.description)
            $('#slug-edit-cate').val(response.data.slug)
            $('#parent-edit-cate').val(response.data.parent_id)
            
            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit-cate').attr('data-url','{{ asset('') }}cateresave/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      });
  $('#form-edit-cate').submit(function (e) {
        //mở modal edit lên
        
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        // alert(url);
        $.ajax({
          //phương thức get
          type: 'put',
          url: url,
          data:{
            name: $('#name-edit-cate').val(), 
            thumbnail: $('#thumbnail-edit-cate').val(), 
            description: $('textarea#description-edit-cate').val(),  
            slug: $('#slug-edit-cate').val(),
            parent_id: $('#parent-edit-cate').val(),
            // user_id: 1,
            // category_id: 1, 
          },
          success: function (response) {
            // toastr.success('edit todo success!');
            $('#modal-edit-cate').modal('hide');
            
            window.location.reload();
            
          },
          error: function (error) {
            
          }
        })
      })

});

  
</script>
<script>

$(function() {
    $('#cates-table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
        processing: true,
        serverSide: true,
        ajax: '{{route('getListCate')}}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'thumbnail', name: 'thumbnail' },
            { data: 'slug', name: 'slug' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action' }

            
        ]
    });
    $('#form-add-cate').submit(function (e) {
      e.preventDefault();
      //lấy attribute data-url của form lưu vào biến url
      var url=$(this).attr('data-url');
      $.ajax({
        //sử dụng phương thức post
        type: 'post',
        url: url,
        data: {
          //lấy dữ liệu từ ô input trong form thêm mới
          
          name: $('#name-add-cate').val(), 
          thumbnail: $('#thumbnail-add-cate').val(), 
          description: $('textarea#description-add-cate').val(),  
          slug: $('#slug-add-cate').val(),
          parent_id: $('#parent-add-cate').val(),
          // user_id: 1,
          // category_id: 1, 
        
          
        },
        success: function (response) {
          // hiện thông báo thêm mới thành công bằng toastr
          
          //ẩn modal add đi
          $('#modal-add-cate').modal('hide');
          setTimeout(function () {
            window.location.href="{{ route('cate') }}";
          });
        },
        error: function (jqXHR, textStatus, errorThrown) {
          //xử lý lỗi tại đây
        }
      })
      });
});

</script>
<script>
  $(document).ready(function() {
    $(document).on('click','.btn-show-tagg',function(e){
      $('#modal-show-tagg').modal('show');
  //lấy dữ liệu từ attribute data-url lưu vào biến url
  var url=$(this).attr('data-url');
  $.ajax({
    //sử dụng phương thức get
    type: 'get',
    url: url,
    //nếu thực hiện thành công thì chạy vào success
    success: function (response) {
      console.log(response)
      //hiển thị dữ liệu được controller trả về vào trong modal
      $('h3#name-show-tagg').text(response.data.name)
      
      
      $('h3#slug-show-tagg').text(response.data.slug)
      
      
    },
    error: function (jqXHR, textStatus, errorThrown) {
      //xử lý lỗi tại đây
    }
  });
});
  $(document).on('click','.btn-delete-tagg',function(e){
    var url=$(this).attr('data-url');
        // alert(url);
        //hiển thị dialogbox xác nhận xoá
        if (confirm("Are you sure?")){
        $.ajax({
          type: 'delete',
          url: url,
          success: function(response) {
            // toastr.warning('delete todo success!')
            alert('success');
            window.location.href="{{ route('tagg') }}";
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      }
  });
  $(document).on('click','.btn-edit-tagg',function(e){
        //mở modal edit lên
        $('#modal-edit-tagg').modal('show');
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        // alert(url);
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#name-edit-tagg').val(response.data.name)
            
            $('#slug-edit-tagg').val(response.data.slug)
            
            
            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit-tagg').attr('data-url','{{ asset('') }}taggresave/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      });
  $('#form-edit-tagg').submit(function (e) {
        //mở modal edit lên
        
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        // alert(url);
        $.ajax({
          //phương thức get
          type: 'put',
          url: url,
          data:{
            name: $('#name-edit-tagg').val(), 
             
            slug: $('#slug-edit-tagg').val(),
            
            // user_id: 1,
            // category_id: 1, 
          },
          success: function (response) {
            // toastr.success('edit todo success!');
            $('#modal-edit-tagg').modal('hide');
            
            window.location.reload();
            
          },
          error: function (error) {
            
          }
        })
      })

});

  
</script>
<script>

$(function() {
    $('#taggs-table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
        processing: true,
        serverSide: true,
        ajax: '{{route('getListTagg')}}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            
            { data: 'slug', name: 'slug' },
            
            { data: 'action', name: 'action' }

            
        ]
    });
    $('#form-add-tagg').submit(function (e) {
      e.preventDefault();
      //lấy attribute data-url của form lưu vào biến url
      var url=$(this).attr('data-url');
      $.ajax({
        //sử dụng phương thức post
        type: 'post',
        url: url,
        data: {
          //lấy dữ liệu từ ô input trong form thêm mới
          
          name: $('#name-add-tagg').val(), 
          
          slug: $('#slug-add-tagg').val(),
          
          // user_id: 1,
          // category_id: 1, 
        
          
        },
        success: function (response) {
          // hiện thông báo thêm mới thành công bằng toastr
          
          //ẩn modal add đi
          $('#modal-add-tagg').modal('hide');
          setTimeout(function () {
            window.location.href="{{ route('tagg') }}";
          });
        },
        error: function (jqXHR, textStatus, errorThrown) {
          //xử lý lỗi tại đây
        }
      })
      });
});

</script>
</body>
</html>
