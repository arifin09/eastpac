@php
    use App\Http\Controllers\MenuController;
@endphp
<aside class="main-sidebar">
    <section class="sidebar">
    <div class="user-panel">
        <div class="row" align="center">
            <div class="col-md-12">

                @if(Auth::user()->getMedia('avatars')->last() != false)
                    <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl() }}" width="40%" class="img-circle" alt="User Image">
                @else
                    <img src="{{asset('dist/img/user.png')}}" width="40%" class="img-circle" alt="User Image">
                @endif

                <p>{{ Auth::user()->name }}</p>
                <br>
                {{-- <p style="margin-top: -5%"><b>Unique ID : IXIA1A105</b></p> --}}
                @if(Auth::user()->hasVerifiedEmail())
                    <p style="margin-top: -13%;color:green"><b>Verified <i class="fa fa-check"></i></b></p><br>
                @else
                    <p style="margin-top: -13%;color:red"><b>Verified <i class="fa fa-times"></i></b></p><br>
                @endif

                <button class="btn btn-warning btn-sm" style="margin-top: -20%">KYC Pending</button>
            </div>
        </div>
        </div>
        <hr>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ (Route::currentRouteName() == "home") ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="{{ (Route::currentRouteName() == "home.kycapp") ? 'active' : '' }}"><a href="{{route('home.kycapp')}}"><i class="fa fa-copy"></i> <span>KYC Application</span></a></li>
            <li class="{{ (Route::currentRouteName() == "home.contribution") ? 'active' : '' }}"><a href="{{ route('home.contribution') }}"><i class="fa fa-external-link"></i> <span>Contribution</span></a></li>
            <li class="{{ (Route::currentRouteName() == "home.transaction") ? 'active' : '' }}"><a href="{{ route('home.transaction') }}"><i class="fa fa-random"></i> <span>Transaction</span></a></li>
            <li class="{{ (Route::currentRouteName() == "home.referral") ? 'active' : '' }}"><a href="{{route('home.referral')}}"><i class="fa fa-refresh"></i> <span>Referral</span></a></li>
            <li class="{{ (Route::currentRouteName() == "profileIndex") ? 'active' : '' }}"><a href="{{ route('profileIndex') }}"><i class="fa fa-user"></i> <span>Account</span></a></li>
            <li class="{{ (Route::currentRouteName() == "home.security") ? 'active' : '' }}"><a href="{{route('home.security')}}"><i class="fa fa-lock"></i> <span>Security</span></a></li>
            <li class="{{ (Route::currentRouteName() == "home.dshare") ? 'active' : '' }}"><a href="{{route('home.dshare')}}"><i class="fa fa fa-file"></i> <span>D-Share</span></a></li>            
            @foreach(MenuController::loadMenu()->where('level', 1)->get() as $menu)
                @if(MenuController::loadMenu()->where('parent', $menu->id)->count() > 0)
                    @if(is_null($menu->role))
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
                    @role($menu->role)
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
                    @endrole
                    @endif
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
                    <li class=""><a href="{{ route('admin.managemenu') }}"><i class="fa fa-circle-o"></i> Menu</a></li>
                    <li class=""><a href="{{ route('admin.usermanage') }}"><i class="fa fa-circle-o"></i> Manage User</a></li>
                </ul>
            </li>
            <li class="treeview
                {{ (Route::currentRouteName() == "whitePaper.index") ? 'active' : '' }}">
                <a href="#">
                <i class="fa fa-key"></i> <span>Media</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('whitePaper.index') }}"><i class="fa fa-circle-o"></i> File</a></li>
                    <li class=""><a href="{{ route('images.index') }}"><i class="fa fa-circle-o"></i> Images</a></li>
                    
                        
                </ul>
            </li>
            <li class="{{ (Route::currentRouteName() == "admin.config.index") ? 'active' : '' }}"><a href="{{route('admin.config.index')}}"><i class="fa fa-gears"></i> <span>Site Config</span></a></li>
            @endrole
        </ul>
    </section>
</aside>
