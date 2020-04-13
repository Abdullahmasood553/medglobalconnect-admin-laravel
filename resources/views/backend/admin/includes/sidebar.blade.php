<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
       
          <ul class="treeview-menu">
              <li class="active"><a href="{{ route('admin.main_category') }}"><i class="fa fa-circle-o"></i> Categories</a></li>

              <li class="active"><a href="{{ route('admin.sub_category') }}"><i class="fa fa-circle-o"></i>Sub Categories</a></li>


            <li class="active"><a href="{{ route('admin.orders') }}"><i class="fa fa-circle-o"></i> Orders</a></li>
          </ul>

        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
