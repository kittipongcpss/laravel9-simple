<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box">
    </div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header" >
            <div class="navbar-wrapper" >

                <div class="navbar-logo" style="background: #EA3D8D;">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <!--<i class="ti-search"></i>-->
                    </a>


                    <a href="./?m=main">
                        <i class="ti-home" style="font-size: 18px;"></i><img class="img-fluid" src="{{ URL::asset('images/logo2.png')}}" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>

                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    @yield('navright')
                    
                </div>
            </div>
        </nav>
