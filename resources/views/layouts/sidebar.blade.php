<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
<div class="navbar-brand-box">
        <a href="{{url('index')}}" class="logo logo-dark">
           
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/Screenshot 2024-06-29 161319.png') }}" alt="" height="60">
            </span>
        </a>
        <a href="{{url('index')}}" class="logo logo-light">
           
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-devthai02.jpg') }}" alt="" height="20">
            </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">ระบบแจ้งซ่อมออนไลน์</li>
                    <li>
                        <a href="{{url('index')}}">
                            <i class="uil-home-alt"></i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admins/user')}}" class="waves-effect">
                            <i class="uil-users-alt"></i>
                            <span>จัดการสมาชิก</span>
                        </a>
                    </li>
                    <li>
                        <a href="position" class="waves-effect">
                            <i class="uil-edit-alt"></i>
                            <span>จัดการตำแหน่ง</span>
                        </a>
                    </li>
                    <li>
                        <a href="department" class="waves-effect">
                            <i class="uil-edit-alt"></i>
                            <span>จัดการแผนก</span>
                        </a>
                    </li>
                    <li>
                        <a href="building" class="waves-effect">
                            <i class="uil-building"></i>
                            <span>จัดการอาคาร</span>
                        </a>
                    </li>
                    <li>
                        <a href="equipment" class="waves-effect">
                            <i class="uil-desktop"></i>
                            <span>จัดการอุปกรณ์</span>
                        </a>
                    </li>
                    <li>
                        <a href="repair" class="waves-effect">
                            <i class="uil-wrench"></i>
                            <span>การแจ้งซ่อม</span>
                        </a>
                    </li>
                    <li>
                        <a href="contacts-list" class="waves-effect">
                            <i class="uil-print"></i>
                        <span>Export รายงาน</span>
                        </a>
                    </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
