<main class="position-absolute w-100 h-100" style="background-color:var(--primary-color)">
  <section class="d-flex w-100 h-100 align-items-center justify-content-center">
      <div class="card rounded-0 border-0">
          <div class="row g-1">
              <div class="col-12 col-md-6 p-5 border-end text-center login-back">
                  <div class="position-relative" style="z-index:2">
                    <img src="<?php echo base_url().'/assets/images/pdp_logo.png';?>"width="30%" alt="logo" />
                    <h1 class="text-uppercase h3 text-white"><?php echo !empty($barangay_name)? $barangay_name :'Barangay Name';?></h1>
                    <img src="<?php echo base_url().'/assets/images/bams_logo.jpg';?>" class="py-3" width="90%" alt="corporate_logo">
                    <p class="text-uppercase lead fw-normal text-white">Barangay Affairs Management System</p>
                  </div>
              </div>
              <div class="col-12 col-md-6 p-5">
                  <h2 class="text-upppercase display-3">Auth
                    <hr class="mt-0" style="border-top: 8px solid var(--primary-color); opacity: 0.8; width:170px">
                  </h2>  
                  <?php echo form_open() ?>
                  <div class="py-5">
                      <h3 class="text-uppercase">Log-in</h3>
                      <div class="my-3">
                          <label for="username" class="form-label">Username:</label>
                          <input type="text" class="form-control" id="username" placeholder="Type your Username">
                      </div>
                      <div class="mb-3">
                          <label for="password" class="form-label">Password:</label>
                          <input type="password" class="form-control" id="password" placeholder="Type your Password">
                      </div>
                      <div class="text-center">
                        <a href="<?php echo base_url('dashboard') ?>" class="btn btn-primary btn-lg mt-3" type="submit"><i class="fas fa-save"></i> Submit</a>
                      </div>
                  </div>
              </div>
              <?php echo form_close() ?>
          </div>
      </div>
  </section>
</main>