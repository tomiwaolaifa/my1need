<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center logo-container">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="index.html" class="logo">
                <img src="{{asset('assets/images/my1need_logo.svg')}}" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner niceScrollleft">

        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-collage"></i>
                        <span> Dashboard </span>
                    </a>
                </li>



                <li class="logout-btn">
                    <a href="{{ route('log_out') }}" class="waves-effect">
                        <span> Logout </span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
