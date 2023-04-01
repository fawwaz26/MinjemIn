<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark" style="
                background: #1B2124;
                color: #ffffff;
            ">
                <div class="drawer-spacer">
                    <div class="media align-items-center">
                        <div class="media-body" style="margin-left: 50px">
                            <a href="/" class="h5 m-0 text-link"><img src="style/images/logo.png" alt=""/></a>
                        </div>
                    </div>
                </div>
                <!-- bikin garis line pembatas -->
                <hr style="margin: 1rem 0;
                color: inherit;
                background-color: white;
                border: 1;
                opacity: .25;">
                <!-- DASHBOARDS MENU -->
                <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item active ">
                        <a href="/dashboard" style="color: #ffffff">
                            <i class="material-icons" style="color: #ffffff">poll</i>
                            <span class="drawer-menu-text"> Dashboard</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="/pinjaman" style="color: #ffffff">
                            <i class="material-icons" style="color: #ffffff">dns</i>
                            <span class="drawer-menu-text"> Pinjaman</span>
                            {{-- <span class="badge badge-pill badge-success ml-1">4</span> --}}
                        </a>
                    </li>
                    <li class="drawer-menu-item " >
                        <a href="/akun" style="color: #ffffff">
                            <i class="material-icons" style="color: #ffffff">store</i>
                            <span class="drawer-menu-text"> Akun</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>