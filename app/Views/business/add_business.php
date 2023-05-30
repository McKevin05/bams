<?php echo form_open(base_url('business/add')) ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="fst-italic">REGISTRATION FORM</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2" onchange="showDiv('append_data','floatingSelectV')">
								<div class="form-floating">
									<select name="business_type" class="form-select" id="floatingSelectV" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="SMALL BUSINESS">SMALL BUSINESS</option>
										<option value="MICRO, SMALL & MEDIUM ENTERPRISES">MICRO, SMALL & MEDIUM ENTERPRISES</option>
									</select>
									<label for="floatingSelect">TYPE OF BUSINESS</label>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="row">
							<!-- <div class="row" id="append_data"> -->
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<h6 class="box-title"><i class="fas fa-user-edit"></i> BUSINESS INFORMATION</h6>
									<hr class="hr-box-title">
								</div>
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control " id="business_name" name="business_name" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">BUSINESS NAME</label>
									</div>
								</div>
								
								
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
									<div class="form-floating">
										<?php echo form_dropdown('business_residency',["" => "CHOOSE...","RESIDENT" => "RESIDENT","NOT RESIDENT" => "NOT RESIDENT"],set_value('business_residency',NULL),'class="form-select" id="business_residency" aria-label="Floating label select example"') ?>
										<label for="floatingSelect">RESIDENT/NOT RESIDENT</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2" id="nameOfOwner">
									<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">NAME OF OWNER</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="number" class="form-control text-uppercase" id="business_mobile_no" name="business_mobile_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">MOBILE NO.</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_authorized_rep" name="business_authorized_rep" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">AUTHORIZED REPRESENTATIVE</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_position" name="business_position" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">POSITION</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_office_no" name="business_office_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">OFFICE NUMBER</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="number" class="form-control text-uppercase" id="business_fax_no" name="business_fax_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">FAX NUMBER</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="email" class="form-control" id="business_email" name="business_email" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">EMAIL</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control" id="business_website" name="business_website" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">WEBSITE</label>
									</div>
								</div>
								<!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
									<div class="form-floating">
										<select name="business_category" class="form-select" id="business_category" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="SARI-SARI STORE">SARI-SARI STORE</option>
											<option value="KARINDERYA">KARINDERYA</option>
											<option value="VULCANIZING SHOP">VULCANIZING SHOP</option>
											<option value="RENTAL HOUSE/ROOM">RENTAL HOUSE/ROOM</option>
										</select>
										<label for="floatingSelect">BUSINESS CATEGORY</label>
									</div>
								</div> -->
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<?php echo form_dropdown('business_line',$line_business,NULL,'class="form-select" id="business_line" aria-label="Floating label select example"') ?>
										<label for="floatingSelect">LINE OF BUSINESS</label>
									</div>
								</div>
								<?php $typeofowenership = array(
									"SOLE PROPRIETORSHIP" => "SOLE PROPRIETORSHIP",
									"PARTNERSHIP" => "PARTNERSHIP",
									"CORPORATION" => "CORPORATION",
									"COOPERATIVE" => "COOPERATIVE",

								)?>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<?php echo form_dropdown('business_type_ownership',$typeofowenership,NULL,'class="form-select" id="business_type_ownership" aria-label="Floating label select example"') ?>
										<label for="floatingSelect">TYPE OF OWNERSHIP</label>
									</div>
								</div>
								<!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
									<div class="form-floating">
										<input type="date" class="form-select text-uppercase" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">DATE START</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
									<div class="form-floating">
										<input type="date" class="form-select text-uppercase" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">DATE END</label>
									</div> -->
								</div>
								<div class="clearfix"></div>
							
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
									<h6 class="box-title"><i class="fas fa-map-marker-alt"></i> OFFICE ADDRESS</h6>
									<hr class="hr-box-title">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
									<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="business_address_house_no" name="business_address_house_no" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">HOUSE NO.</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
									<div class="form-floating">
										<?php echo form_dropdown('business_address_street',$street,NULL,'class="form-select" id="business_address_street" aria-label="Floating label select example"') ?>
										<!-- <select name="street" class="form-select" id="street" aria-label="Floating label select example">
											<option value="" selected="selected">SELECT STREET</option>
											<option value="TEST STREET">TEST STREET</option>
										</select> -->
										<label for="floatingSelect">STREET</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
									<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="business_address_barangay" name="business_address_barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
									<label for="floatingInputValue">BARANGAY</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_address_city" name="business_address_city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
										<label for="floatingInputValue">CITY</label>
									</div>
								</div>
								<div class="clearfix"></div>
							
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
									<h6 class="box-title"><i class="fas fa-map-marker-alt"></i> OTHER INFORMATION</h6>
									<hr class="hr-box-title">
								</div>

								<!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
									<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_permit_no" name="business_permit_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">BUSINESS PALTE NO.</label>
									</div>
								</div> -->
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="number" class="form-control text-uppercase" id="business_dti_no" name="business_dti_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">DTI REGISTRATION NO.</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="date" class="form-control text-uppercase" id="business_dti_issued" name="business_dti_issued" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">DTI DATE ISSUE</label>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="number" class="form-control text-uppercase" id="business_sec_no" name="business_sec_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">SEC. NO.</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="date" class="form-control text-uppercase" id="business_sec_issued" name="business_sec_issued" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">SEC. DATE ISSUE</label>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="number" class="form-control text-uppercase" id="business_tin_no" name="business_tin_no" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">TIN NO.</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
									<div class="form-floating">
										<input type="number" class="form-control text-uppercase" id="business_paid_up_capital" name="business_paid_up_capital" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">PAID UP CAPITAL</label>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
								<button type="submit" class="btn btn-success">SUBMIT</button>
							</div>
					    </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</div>
<?php echo form_close() ?>
<script>
	function checkNumber(event) {
          if(event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 13 || event.keyCode == 16 || event.keyCode == 18 || event.keyCode == 20 || event.keyCode == 32|| event.keyCode == 46 || event.keyCode == 45 ||  (event.keyCode >=48 &&  event.keyCode <= 57) || (event.keyCode >=96 &&  event.keyCode <= 105) )
        {
          event.returnValue = true;
          return;
        }
        event.returnValue = false;
        return;
     }
</script>