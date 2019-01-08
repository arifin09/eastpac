@php
    use App\Http\Controllers\MenuController;
@endphp

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('dist/img/default-avatar.png')}}" class="img-circle" alt="User Image">
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
        <li class="{{ (Route::currentRouteName() == "home") ? 'active' : '' }}">
            <a href="{{ route('home') }}"><i class="fa fa-bar-chart-o"></i> <span>Dashboard</span></a>
        </li>
        <li>
            <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
            </span>
            </a>
        </li>
        <li>
            <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
            </span>
            </a>
        </li>
        @foreach(MenuController::loadMenu()->where('level', 1)->get() as $menu)
            @if(MenuController::loadMenu()->where('parent', $menu->id)->count() > 0)
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-key"></i> <span>{{$menu->text}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach (MenuController::loadMenu()->where('parent', $menu->id)->get() as $submenu)
                            <li class=""><a href="#"><i class="fa fa-circle-o"></i> {{$submenu->text}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class=""><a href="#"><i class="fa fa-gears"></i> <span>{{$menu->text}}</span></a></li>
            @endif
        @endforeach
        @role('administrator')
            <li class="treeview
                {{ (Route::currentRouteName() == "admin.usermanage") ? 'active' : '' }}">
                <a href="#">
                <i class="fa fa-key"></i> <span>Admin</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('admin.usermanage') }}"><i class="fa fa-circle-o"></i> Menu</a></li>
                    <li class=""><a href="{{ route('admin.usermanage') }}"><i class="fa fa-circle-o"></i> Manage User</a>
                    </li>
                </ul>
            </li>
            <li class="{{ (Route::currentRouteName() == "admin.config.index") ? 'active' : '' }}"><a href="{{route('admin.config.index')}}"><i class="fa fa-gears"></i> <span>Site Config</span></a></li>
        @endrole

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
