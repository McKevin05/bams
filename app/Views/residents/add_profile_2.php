<?php echo form_open_multipart(base_url('residents/add'),"id='frm_resident'") ?>
<div class="row residents-ct">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">Resident Registration Form</h3>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="box-title"><i class="fas fa-user-edit"></i> PERSONAL INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
						<div class="row">

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="lastname" name="lastname" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">LAST NAME</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="firstname" name="firstname" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">FIRST NAME</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="middlename" name="middlename" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">MIDDLE NAME</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="suffix_name" name="suffix_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">NAME SUFFIX</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
									<?php echo form_dropdown('gender',$gender,NULL,'class="form-select" id="civil_status" aria-label="Floating label select example"') ?>
									
									<label for="floatingSelect">GENDER</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
									<?php echo form_dropdown('civil_status',$civil_status,NULL,'class="form-select" id="civil_status" aria-label="Floating label select example"') ?>
									<label for="floatingSelect">MARITAL STATUS</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control" id="bdate" name="bdate" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BIRTH DATE</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="type" class="form-control text-uppercase" id="contact_no" name="mobile_no" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">CONTACT NUMBER</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="spouse_name" name="spouse_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">NAME OF SPOUSE(If Married)</label>
								</div>
					    	</div>
					    	
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="lengthofstay" name="lengthofstay" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">START DATE STAY</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <?php echo form_dropdown('status',$status,NULL,'class="form-select" id="status" aria-label="Floating label select example"') ?>
								  <label for="floatingInputValue">STATUS</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <?php echo form_dropdown('profession',$profession,NULL,'class="form-select" id="profession" aria-label="Floating label select example"') ?>
								  <!-- <input type="text" class="form-control text-uppercase" id="profession" name="profession" placeholder="" value="" autocomplete="off"> -->
								  <label for="floatingInputValue">PROFESSION</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="nationality" name="nationality" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">NATIONALITY</label>
								</div>
					    	</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
						<div class="row d-flex justify-content-center">
					    	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2 profile_pic text-center">
					    		<!-- <p class="fwbold">PROFILE PICTURE</p> -->
					    		<span id="resident_id_pic">
						    		<img src="<?php echo base_url().'/assets/images/profile.png' ?>" class="img-rounded"  alt="Upload Picture" id="id_view">
					    		</span>
					    		<div class="input-group mb-3">
								  <input type="file" class="form-control" id="resident_img" name="resident_img">
								</div>

								<div class="input-group mb-3">
								  <button type="button" class="btn btn-success" id="use_camera">Use Camera</button>
								</div>
					    	</div>
					    </div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h6 class="box-title"><i class="fas fa-map-marker-alt"></i> ADDRESS INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
									<select name="living_status" class="form-select" id="living_status" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT OWNER/RENTEE</option>
										<option value="OWNER">OWNER</option>
										<option value="RENTEE">RENTEE</option>
									</select>
									<label for="floatingSelect">OWNER/RENTEE</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="house_no" name="house_no" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">HOUSE NO.</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
									<?php echo form_dropdown('street',$street,NULL,'class="form-select" id="street" aria-label="Floating label select example"') ?>
									<!-- <select name="street" class="form-select" id="street" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT STREET</option>
										<option value="TEST STREET">TEST STREET</option>
									</select> -->
									<label for="floatingSelect">STREET</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="barangay" name="barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
								  <label for="floatingInputValue">BARANGAY</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="city" name="city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
								  <label for="floatingInputValue">CITY</label>
								</div>
					    	</div>
							
							
						</div>
						<!-- <div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="address_from" name="address_from" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">FROM</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="address_to" name="address_to" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">TO</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="address_to_prsent" name="address_to_prsent" placeholder="" value="PRESENT" autocomplete="off" disabled>
								  <label for="floatingInputValue">TO</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-end">
					    		<button type="button" class="btn btn-success mt-3"><i class="fas fa-calendar-day"></i> PRESENT</button>
					    	</div>
					    </div> -->
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h6 class="box-title"><i class="fa-solid fa-people-roof"></i> FAMILY BACKGROUND</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										If Married
									</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="city" name="city" placeholder="" value="" autocomplete="off" readonly>
								  <label for="floatingInputValue">SPOUSE NAME</label>
								</div>
					    	</div>
						</div>
						<div class="row addChild">
							<div class="row divChild">
								<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 mt-2">
									<div class="text-end">
										<button type="button" class="btn btn-danger remove"><i class="fa fa-times"></i></button>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">
									<div class="form-floating">
									  <input type="text" class="form-control text-capitalize" id="city" name="city" placeholder="" value="" autocomplete="off" readonly>
									  <label for="floatingInputValue">NAME OF CHILD</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
									<div class="form-floating">
									  <input type="date" class="form-control text-capitalize" id="city" name="city" placeholder="" value="" autocomplete="off" readonly>
									  <label for="floatingInputValue">BIRTH DATE</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 mt-2">
								<div class="text-end">
									<button type="button" class="btn btn-success btnaddChild"><i class="fa fa-plus"></i> ADD CHILD</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h6 class="box-title"><i class="fas fa-id-card"></i> IDENTIFICATION INFORMATION</h6>
						<hr class="hr-box-title">
							<a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_id_information"><i class="fas fa-plus"></i> Add Identification Information</a>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td><b>#</b></td>
										<td><b>ID CARD TYPE</b></td>
										<td><b>ID NUMBER</b></td>
										<td><b>ACTION</b></td>
									</tr>
									<!-- <tr>
										<td>1</td>
										<td>YELLOW CARD</td>
										<td>2022000000001</td>
										<td><button type="button" class="btn btn-danger"><i class="fas fa-times"></i></button></td>
									</tr> -->
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-center">
						<a href="<?php echo base_url('residents') ?>" class="btn btn-lg btn-secondary mt-3"><i class="fas fa-chevron-left"></i> BACK</a>

						<button type="submit" class="btn btn-success btn-lg mt-3" id="btnsave_resident"><i class="fas fa-save"></i> SAVE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>

<?php echo view('modals/add_id_information')?>

<script>
	$('.btnaddChild').click(function() {
    $('.divChild').before('<div class="block"><input type="text" /><span class="remove">Remove Option</span></div>');
	});
	$('.addChild').on('click','.remove',function() {
		$(this).parent().parent().remove();
	});
</script>