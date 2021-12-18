<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar elevation-4 bg-light card">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b> GURU</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        

        <!-- SidebarSearch Form -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
        <style>
            p {
                color: rgb(5, 24, 28);
                font-family: 'Open Sans', sans-serif;
            }

            .lik {
                font-size: 12px;
            }

            i {
                color: black;
            }
        </style>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Timeline
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="<?= base_url('timeline') ?>" class="nav-link <?php if ($path == 'timeline') echo 'active' ?>">
                                <i class="fas fa-sticky-note    nav-icon" aria-hidden="true"></i>
                                <p class="lik">Note TimeLine</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('event') ?>" class="nav-link <?php if ($path == 'event') echo 'active' ?>">
                                <i class="far fa-calendar nav-icon"></i>
                                <p class="lik">Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-calendar nav-icon"></i>
                                <p class="lik"> Kalender Jadwal</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item ">
                    <a href="<?= base_url('logbook') ?>" class="nav-link <?php if ($path == 'logbook') echo 'active' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Logbook </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= base_url('ujian') ?>" class="nav-link <?php if ($path == 'ujian') echo 'active' ?> ">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Ujian </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="<?= base_url('ulangan') ?>" class="nav-link <?php if ($path == 'ulangan') echo 'active' ?> ">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Ulangan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('rpp') ?>" class="nav-link <?php if ($path == 'rpp') echo 'active' ?> ">
                        <i class="nav-icon fas fa-book"></i>
                        <p> RPP</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('kd') ?>" class="nav-link <?php if ($path == 'kd') echo 'active' ?> ">
                        <i class="nav-icon fas fa-book"></i>
                        <p> KD</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>