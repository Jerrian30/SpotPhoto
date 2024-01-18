<!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: pink;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <img src="{{ asset('sbadmin/img/logo.png') }}" alt=""  style="width: 4rem; height: 4rem; border-radius: 100%;">
                </div>
                {{-- <div class="sidebar-brand-text mx-3"></div> --}}
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 bg-dark">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>

            <hr class="sidebar-divider my-0 bg-dark">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pelanggan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-item" href="buttons.html"><b>Semua</b></h6>
                        <a class="collapse-item" href="{{ route('onestudios.index') }}">Studio 1</a>
                        <a class="collapse-item" href="{{ route('twostudios.index') }}">Studio 2</a>
                        <a class="collapse-item" href="{{ route('threestudios.index') }}">Studio 3</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#"  
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-"></i>
                    <span>Karyawan</span>
                </a>
            </li>
            <hr class="sidebar-divider my-0 bg-dark">
        </ul>

        <!-- End of Sidebar -->