<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu nav-list" id="side-menu">

            <li class="nav-header">
                <div class="dropdown profile-element text-center">
                    {{-- <div style="margin-bottom: 30px;">
                         <img alt="image" src="{{ asset('panel/assets/images/logo.png') }}" width="166">
                     </div>--}}

                    <span>
                        <img alt="image" class="img-circle avater_logo"
                             src="https://app.medmission.com.bd/public/admin/img/admin.png">
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">System Administrator</strong>
                                <b class="caret"></b>
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="https://app.medmission.com.bd/profile"><i class="fa fa-user-circle"></i>
                                Profile</a></li>
                        <li><a href="{{ route('admin.password.change') }}"><i class="fa fa-key"></i> Change
                                Password</a></li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="{{ getActiveClassByRoute('admin.dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('CategoryController') }}">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="fa fa-th"></i> <span class="nav-label">Categories</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('BrandController') }}">
                <a href="{{ route('admin.brands.index') }}">
                    <i class="fa fa-amazon"></i> <span class="nav-label">Brands</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('ProductController') }}">
                <a href="{{ route('admin.products.index') }}">
                    <i class="fa fa-list"></i> <span class="nav-label">Products</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('CouponController') }}">
                <a href="{{ route('admin.coupons.index') }}">
                    <i class="fa fa-gift"></i> <span class="nav-label">Coupons</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('NewsLetterController') }}">
                <a href="{{ route('admin.newsletters.index') }}">
                    <i class="fa fa-youtube-play"></i> <span class="nav-label">Newsletters</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('SettingController') }}">
                <a href="{{ route('admin.setting.show') }}">
                    <i class="fa fa-gear"></i> <span class="nav-label">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
