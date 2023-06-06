<!-- <div class="container-fluid print-ct f-arial"> -->
<div class="container-fluid print_show print-ct f-arial">
	<div class="row">
		<div class="col-12">
			<div class="logo_cert_right float-end">
				<img src="<?php echo base_url().'/assets/images/pdp_logo.png' ?>" width="135px">
			</div>
			<div class="logo_cert_left float-start">
				<img src="<?php echo base_url().'/assets/images/makati_logo.png' ?>" width="135px">
			</div>
			 <h4 class="pb-0 mb-0 text-center"><b>REPUBLIC OF THE PHILIPPINES</b></h4>
			 <h5 class="pb-0 mb-0 text-center"><b>City of Makati</b></h5>
			 <h5 class="pb-0 mb-0 text-center"><b>Barangay Name</b></h5>
			 <!-- <h5 class="pb-0 mb-0 text-center"><b>Barangay Pio de Pilar</b></h5> -->
			 <h6 class="pb-0 mb-0 text-center">
			 	<small>
				 	Barangay Address, Makati City <br>
					Tel Nos.: 893-1234 / 779-1234 / 550-1234 <br>
					E-mail Address: barangayemail@gmail.com
					<!-- Tel Nos.: 893-3533 / 779-8922 / 550-2616 <br> -->
					<!-- E-mail Address: bpiodelpilarsecoffice2020@gmail.com -->
			 	</small>
			 </h6>	
		</div>
		<div class="clearfix"></div>
		<div class="col-4 mt-5" style="border-right:2px solid #000; min-height:920px;" >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 mb-3">
				<p class="mb-3">
					<b>Barangay Captain</b><br>
					Pedro Dela Cruz
				</p>
				<p class="mb-3">
					<b>Barangay Council Members</b><br><br>

					Kag. Juantzy B. Dela Cruz<br><br>
					Kag. Dostzy B. Dela Cruz<br><br>
					Kag. Terestzy B. Dela Cruz<br><br>
					Kag. Fuartertzy B. Dela Cruz<br><br>
					Kag. Sinkutzy B. Dela Cruz<br><br>
					Kag. Saistzy B. Dela Cruz<br><br>
					Kag. Syetetzy B. Dela Cruz<br><br>
				</p>
				<p class="mb-3">
					<b>Barangay Treasurer</b><br>
					Treas Dela Cruz
				</p>	
				<p class="mb-3">
					<b>Barangay Secretary</b><br>
					Sec Dela Cruz
				</p>
				<p class="mb-3">
					<b>SK Chairperson</b><br>
					Sk chair Dela Cruz
				</p>
			</div>
		</div>
		<div class="col-8">
			<?php if(!empty($bc_no_ect)): ?>
			<div class="mt-5 me-5">
				<div class="col-12 text-end">
					BC. No.  Etc-<?php echo $bc_no_ect ?>
				</div>
			</div>
			<?php endif ?>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 mb-3">
				<h3 class="text-center" style="letter-spacing:1px;">
					<b>
						<?php
							if ($certBusiness) 
								echo $cert_title; 
							else
								echo '<b>CERTIFICATE</b>'; 
						?>
					</b>
				</h3>                
			</div>
				<?php
					if ($certBusiness) 
						echo view($cert_body); 
					else
						echo view('certificate/cert_body/custom'); 
				?>
				<div class="row mt-5 mb-4">
					<!-- <div class="col-8">
					</div>
					<div class="col-4">
						Certified Correct:
					</div> -->
				</div>
				<div class="row mb-3">
					<div class="col-6">
					</div>
					<div class="col-6">
						<b><?php echo $captain ?></b> <br>
						Barangay Captain
					</div>
				</div>
				<div class="row">
					<div class="col-12"><small>Note: Any violation(s) or illegal act(s) committed by a Business establishment will caused cancellation of this clearance</small></div>
				</div>
		</div>
	</div>
</div>