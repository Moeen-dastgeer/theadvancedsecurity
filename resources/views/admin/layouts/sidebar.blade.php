<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
        <img src="{{asset('web/assets/images/logo/favicon.png')}}" alt="Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.settings.profile')}}" class="d-block">{{Auth()->user()->name}}</a>
                <a href="#">
                    @foreach(auth()->user()->roles as $role)
                       ( {{ $role->name.' ' }}) 
                    @endforeach
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{ Route::is('admin.dashboard')? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/services/list')}}" class="nav-link {{ Route::is('admin.services.*')? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Services</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/servicebox/list')}}" class="nav-link {{ Route::is('admin.servicebox.*')? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Services Box</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/team/list')}}" class="nav-link {{ Route::is('admin.team.*')? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Team Members</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/sliders/list')}}" class="nav-link {{ Route::is('admin.sliders.*')? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Sliders</p>
                    </a>
                </li>
                @canany(['Contact access','Contact delete'])
                <li class="nav-item">
                    <a href="{{route('admin.contact.list')}}" class="nav-link {{ Route::is('admin.contact.*')? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle-question"></i>
                        <p>Contact us</p>
                    </a>
                </li>
                @endcanany
                <li class="nav-item {{ Route::is(['admin.web_settings.*'])? 'menu-is-opening menu-open' : '' }}">
                    <a href="javascript:void(0);" class="nav-link {{ Route::is(['admin.settings.*'])? 'active' : '' }}">
                        <i class=" nav-icon fa-brands fa-product-hunt"></i>
                        <p>Web Setting <i class="right fas fa-angle-left"></i></p>
                    </a> 
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/contact-us')}}" class="nav-link {{ Route::is('admin.web_settings.contact')? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/web-setting/sections/list')}}" class="nav-link {{ Route::is('admin.web_settings.sections.list')? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Sections</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/counters/list')}}" class="nav-link {{ Route::is('admin.counters.list')? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Counters</p>
                            </a>
                        </li>
                            {{-- <li class="nav-item">
                                <a href="{{route('admin.web_settings.faqs.list')}}" class="nav-link {{ Route::is('admin.web_settings.faqs.list')? 'active' : '' }}">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>FAQs</p>
                                </a>
                            </li> --}}
                             <li class="nav-item">
                            <a href="{{route('admin.web_settings.privacy')}}" class="nav-link {{ Route::is(['admin.web_settings.privacy'])? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Privacy & Policy</p>
                            </a>
                            </li>
                             <li class="nav-item">
                            <a href="{{route('admin.web_settings.terms')}}" class="nav-link {{ route::is(['admin.web_settings.terms'])? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Terms & Conditions</p>
                            </a>
                            </li>
                        </li>
                    </ul>
                </li>
                    
                {{-- @canany(['User access', 'User edit', 'User create', 'User delete','Permission access','Permission edit', 'Permission create', 'Permission delete','Role access','Role edit', 'Role create',' Role delete'])
                    <li class="nav-item {{ Route::is(['admin.permissions.*','admin.users.*','admin.roles.*'])? 'menu-is-opening menu-open' : '' }}">
                        <a href="javascript:void(0);" class="nav-link {{ Route::is(['admin.permissions.*','admin.users.*','admin.roles.*'])? 'active' : '' }}">
                            <i class="nav-icon fas fa-users-gear"></i>
                            <p>Team Manage <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            @canany(['User access', 'User edit', 'User create', 'User delete'])
                                <li class="nav-item">
                                    <a href="{{route('admin.users.index')}}" class="nav-link {{ Route::is('admin.users.*')? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Members</p>
                                    </a>
                                </li>
                            @endcanany --}}
                            {{-- @canany(['Permission access','Permission edit', 'Permission create', 'Permission delete']) --}}
                            {{-- <li class="nav-item">
                                    <a href="{{route('admin.permissions.index')}}" class="nav-link {{ Route::is('admin.permissions.*')? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permissions</p>
                                    </a>
                                </li>  --}}
                            {{-- @endcanany --}}
                            
                            {{-- @canany(['Role access','Role edit', 'Role create',' Role delete'])
                                <li class="nav-item">
                                    <a href="{{route('admin.roles.index')}}" class="nav-link {{ Route::is('admin.roles.*')? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                            @endcanany
                        </ul>
                    </li>     
                @endcanany --}}
                <li class="nav-item {{ Route::is(['admin.settings.*'])? 'menu-is-opening menu-open' : '' }}">
                    <a href="javascript:void(0);" class="nav-link {{ Route::is(['admin.settings.*'])? 'active' : '' }}">
                        <i class=" nav-icon fa fa-user-gear"></i>
                        <p>User Settings <i class="right fas fa-angle-left"></i></p>
                    </a> 
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.settings.profile')}}" class="nav-link {{ Route::is(['admin.settings.profile'])? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                            <a href="{{route('admin.settings.changepassword')}}" class="nav-link {{ route::is(['admin.settings.changepassword'])? 'active' : '' }}">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{route('admin.logout')}}" method="POST" style="display: none;">@csrf</form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>