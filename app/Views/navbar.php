<nav class="navbar navbar-expand-sm fixed-top">
	
	<div class="container-fluid">
		<div class="hide-brand">
			<img src="<?php echo base_url().'/assets/images/pdp_logo.png' ?>" class="barangay-logo">
			<h1>BAMS</h1>
		</div>
		<div class="d-flex justify-content-between nav-ct">
			<div class="d-flex align-items-center">
				<div class="toggle-bar">
					<div class="toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="title-page-ct"><?php echo $title_page; ?></div>
			</div>
			
			<div class="top-nav">
				<ul class="navbar-nav mt-2 mt-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url().'/assets/images/profile.png' ?>" alt="profileImg">
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownId">
							<a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> Profile Information</a>
							<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log-out</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		
	</div>
</nav>
