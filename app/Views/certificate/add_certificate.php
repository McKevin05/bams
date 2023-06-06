<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						
						<h3 class="sub-title">Certificates/Permits Form</h3>
					</div>
					
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						<form id="save_request_certificate">
							<div class="row" id="certForm">	
								<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-end"> 
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<h6 class="box-title"><i class="fas fa-edit"></i> FORM</h6>
												<a href="<?php echo base_url('residents/add')?>" class="btn btn-primary float-end mt-3">Click if the client not yet Registered</a>
											<hr class="hr-box-title">
										</div>
										<!-- <input type="hidden" name="request_certificates_cert_id" value="<?php //echo $cert_id?>"> -->
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 mb-3">
											<label for="floatingSelect"><b>TYPE OF CERTIFICATES/PREMIT</b></label>
											<?php echo form_dropdown('request_certificates_cert_id', $certificates, 'NULL','class="form-select" id="selectCert"');?>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 mb-3">
											<label for="name"><b>NAME</b></label>
											<select class="form-control form-select" name="name" id="selectNames"></select>
											<input type="hidden" name="request_certificate_resident_id" id="request_certificate_resident_id">

										</div>
										<div class="clearfix"></div>
										<div class="row">
											
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-3">
												<label for="floatingInput"><b>AGE</b></label>
												<input type="number" class="form-control" name="age" id="age">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-3">
												<label for="floatingInput"><b>CIVIL STATUS</b></label>
												<?php echo form_dropdown('civil_status', $civil_status, 'NULL','class="form-select" id="selectCivilStatus"');?>
											</div>
											<div class="clearfix"></div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 mb-3">
												<label for="name"><b>LOCATION ADDRESS</b></label>
												<input type="text" name="located_address" id="located_address" class="form-control">
												<?php //echo form_dropdown('located_address', $streets, 'NULL','class="form-select" id="selectLocations"');?>
											</div>
											<div class="clearfix"></div>

											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
												<label for="name"><b>ISSUED DATE</b></label>
												<input type="date" class="form-control" value="<?php echo date('Y-m-d')?>" name="issued" id="floatingInput">
											</div>
										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<a href="<?php echo base_url('certificate') ?>" class="btn btn-lg btn-secondary mt-3"><i class="fas fa-chevron-left"></i> BACK</a>
										<button type="button" class="btn btn-success btn-lg mt-3" data-url="<?php echo base_url('certificate/save')?>" id="btnSubmitCert"><i class="fas fa-save"></i> SUBMIT</button>
									</div>
									<!-- <div id="certificateForm"></div> -->
							</div>
						<!-- <a href="<?php // echo base_url('residents') ?>" class="btn btn-lg btn-secondary mt-3"><i class="fas fa-chevron-left"></i> BACK</a> -->

						</form>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</div>