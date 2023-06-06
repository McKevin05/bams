<?php 
  $uri = service('uri');
  $active = $uri->getSegment(1);
?>
<aside id="sidebar" class="collapse collapse-horizontal show border-end h-100 print_hide">
  <div class="content overflow-y-auto h-100" style="width: 300px;">
    <!-- Profile -->
    <div class="profile d-flex align-items-center">
        <img class="rounded-3 m-3 shadow-sm" src="https://bams.ortadeltech.com/assets/images/profile.png"
            width="80" alt="profile image">
        <span class="ms-2">
            <b class="name lead lh-sm">Firstname M.I. Lastname</b>
            <p class="title m-0">Title</p>
        </span>
    </div>
    <nav class="list-group">
        <ul class="nav">
          <li class="nav-item w-100">
            <a href="<?php echo base_url('dashboard')?>" class="nav-link <?php echo $active =='dashboard' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-tachometer-alt px-2"></i> &nbsp;Dashboard
            </a>
          </li>
          <li class="nav-item w-100">
            <a href="<?php echo base_url('residents')?>" class="nav-link <?php echo $active =='residents' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-users px-2"></i> &nbsp;Residents Profile
            </a>
          </li>
          <li class="nav-item w-100">
            <a href="<?php echo base_url('certificate')?>" class="nav-link <?php echo $active =='certificate' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-certificate px-2"></i> &nbsp;Certification Request
            </a>
          </li>
          <li class="nav-item w-100">
            <a href="<?php echo base_url('property')?>" class="nav-link <?php echo $active =='property' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-home px-2"></i> &nbsp;Real Estates and Properties
            </a>
          </li>
          <li class="nav-item w-100">
            <a href="#" class="nav-link <?php echo in_array($active,['blotter','incident']) ? "active": "" ?> px-3 py-ct" aria-current="true" data-bs-toggle="collapse" data-bs-target="#collapseDropdown1" aria-expanded="false" aria-controls="collapseDropdown1">
                <i class="fa fa-file-archive px-2"></i> &nbsp;Security/Peace and Order <i class="fa fa-angle-down text-end"></i>
              </a>
              <ul class="collapse" id="collapseDropdown1" style="list-style-type:none;">
                <li class="nav-item w-100"><a class="dropdown-item px-3 py-2" href="<?php echo base_url('blotter') ?>"><i class="fa fa-caret-right px-2"></i> &nbsp;Blotter Reports</a></li>
                <li class="nav-item w-100"><a class="dropdown-item px-3 py-2" href="<?php echo base_url('incident') ?>"><i class="fa fa-caret-right px-2"></i> &nbsp;Incident Reports</a></li>
              </ul>
          </li>
          <li class="nav-item w-100">
            <a href="<?php echo base_url('project')?>" class="nav-link <?php echo $active =='project' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-tasks px-2"></i> &nbsp;Projects and Programs
            </a>
          </li>
          <li class="nav-item w-100">
            <a href="<?php echo base_url('business')?>" class="nav-link <?php echo $active =='business' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-store px-2"></i> &nbsp;Registered Business
            </a>
          </li>
          <!-- <li class="nav-item w-100">
            <a href="<?php // echo base_url('inventory')?>" class="nav-link <?php // echo $active =='inventory' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-users-cog px-2"></i> &nbsp;Inventory
            </a>
          </li> -->
          <li class="nav-item w-100">
            <a href="<?php echo base_url('masterdata')?>" class="nav-link <?php echo $active =='masterdata' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-users-cog px-2"></i> &nbsp;Masterdata
            </a>
          </li>
          <li class="nav-item w-100">
            <a href="<?php echo base_url('settings')?>" class="nav-link <?php echo $active =='settings' ? "active": "" ?> px-3 py-ct" aria-current="true">
                <i class="fa fa-cogs px-2"></i> &nbsp;Settings
            </a>
          </li>
        </ul>
    </nav>
  </div>
</aside>