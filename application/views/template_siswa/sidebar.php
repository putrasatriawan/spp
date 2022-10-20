<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class=" sidebar-brand-icon ">
                    <img src=" <?php echo base_url() ?>assets/img/logojenggat.png" width="50px" type="image/png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">MY - SPP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo "active"; ?>" class="nav-link">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a href="<?= base_url('cari_data') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo "active"; ?>" class="nav-link">
                    <i class="fas fa-fw fa-search"></i>
                    <span>Cari Data Anda</span></a>
            </li>

            <li class="nav-item active">
                <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <hr class="sidebar-divider my-0">




        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <b>SMK NEGERI 1 JONGGAT</b>

                        <div class="navbar">

                        </div>


                    </ul>

                    <div class="navbar">

                    </div>


                    </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->