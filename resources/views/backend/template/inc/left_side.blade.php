<!-- BEGIN: Aside Menu -->
<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="{{ url('/admin/dashboard') }}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-text">Dashboad</span>
            </a>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-user"></i>
                <span class="m-menu__link-text">User Account</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{ url('/admin/users') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">User Account</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{ url('/admin/roles') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">Role Group</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-cate"></i>
                <span class="m-menu__link-text">Category</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{ url('/admin/category') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">User Account</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<!-- END: Aside Menu -->
