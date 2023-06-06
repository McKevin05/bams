<header class="d-flex w-100 py-1 print_hide">
    <a href="/"
        class="nav-brand d-none flex-shrink-0 text-decoration-none d-flex ms-3 d-md-flex flex-column flex-md-row align-items-center print_hide"
        style="width: 280px;">
        <img src="https://bams.ortadeltech.com/assets/images/pdp_logo.png" width="75" alt="logo" />
        <span class="display-6 ps-4 text-uppercase" style="margin-top: -5px;">BAMS</span>
    </a>
    <a href="/"
        class="nav-brand d-md-none flex-shrink-0 text-decoration-none d-flex flex-column flex-md-row align-items-center justify-content-center ms-2 print_hide"
        style="width: 75px;">
        <img src="https://bams.ortadeltech.com/assets/images/pdp_logo.png" width="75" alt="logo" />
    </a>
    <nav class="navbar flex-grow-1 print_hide">
        <ul class="nav w-100 align-items-center">
            <li class="nav-item">
                <a class="btn btn-link btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                    aria-expanded="true" aria-controls="sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
            <li class="nav-item">
                <h1 class="h3 m-0"><?php echo !empty($title_page) ? $title_page : ""?></h1>
            </li>
            <li class="ms-auto nav-item">
                <a  href="#" class="nav-link dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="rounded-circle shadow-sm" src="https://bams.ortadeltech.com/assets/images/profile.png"
                        width="50" alt="profile image link">
                </a>
                <ul class="dropdown-menu dropdown-menu-end rounded-0 " style="background: var(--secondary-color);">
                    <li><a class="dropdown-item text-white" href="#"><i class="fa fa-user px-2"></i> &nbsp; Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-white" href="<?php echo base_url()?>"><i class="fa fa-power-off px-2"></i> &nbsp;Log-out</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>