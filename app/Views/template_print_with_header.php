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
        <?php if(!empty($title_print)):?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
			<h3 class="text-center" style="letter-spacing:3px;"><b><?php echo $title_print?></b></h3>                
		</div>
        <?php endif ?>
	</div>
	<?php echo view($body_print); ?>
	
</div>