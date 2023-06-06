<?php echo form_open_multipart(base_url('residents/add'),"id='frm_resident'") ?>
<div class="card rounded-0 residents-ct" style="min-width: 280px;">
	<div class="card-body">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				<h3 class="sub-title">Resident Registration Form</h3>
			</div>

			<?php if (!empty($errors)): ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
					<div class="alert alert-danger"><?php echo $errors ?></div>
				</div>
			<?php endif ?>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h6 class="box-title"><i class="fas fa-user-edit"></i> PERSONAL INFORMATION</h6>
				<hr class="hr-box-title">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<label for="floatingInputValue">LAST NAME</label>
						<input type="text" class="form-control text-uppercase" id="lastname" name="lastname" placeholder="" value="<?php echo set_value('lastname',$resident->lastname) ?>" autocomplete="off">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<label for="floatingInputValue">FIRST NAME</label>
						<input type="text" class="form-control text-uppercase" id="firstname" name="firstname" placeholder="" value="<?php echo set_value('firstname',$resident->firstname) ?>" autocomplete="off">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<label for="floatingInputValue">MIDDLE NAME</label>
						<input type="text" class="form-control text-uppercase" id="middlename" name="middlename" placeholder="" value="<?php echo set_value('middlename',$resident->middlename) ?>" autocomplete="off">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">NAME SUFFIX</label>
						<input type="text" class="form-control text-uppercase" id="suffix_name" name="suffix_name" placeholder="" value="<?php echo set_value('suffix_name',$resident->suffix_name) ?>" autocomplete="off">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingSelect">GENDER</label>
						<?php echo form_dropdown('gender',$gender,set_value('gender',$resident->gender),'class="form-select text-uppercase" id="gender" aria-label="Floating label select example"') ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingSelect">CIVIL STATUS</label>
						<?php echo form_dropdown('civil_status',$civil_status,set_value('civil_status',$resident->civil_status),'class="form-select text-uppercase" id="civil_status" aria-label="Floating label select example"') ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">BIRTH DATE</label>
						<input type="date" class="form-control" id="bdate" name="bdate" placeholder="" value="<?php echo set_value('bdate',$resident->bdate) ?>" autocomplete="off">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">CONTACT NUMBER</label>
						<input type="type" class="form-control text-uppercase" id="contact_no" name="contact_no" placeholder="" value="<?php echo set_value('contact_no',$resident->contact_no) ?>" autocomplete="off">
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">NAME OF SPOUSE(If Married)</label>
						<input type="text" class="form-control text-uppercase" id="spouse_name" name="spouse_name" placeholder="" value="" autocomplete="off">
					</div> -->
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">START DATE STAY</label>
						<input type="date" class="form-control text-uppercase" id="lengthofstay" name="lenghtOfStay" placeholder="" value="<?php echo set_value('lenghtOfStay',$resident->lenghtOfStay) ?>" autocomplete="off">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">STATUS</label>
						<?php $status['OTHERS'] = "OTHERS" ?>
						<?php echo form_dropdown('status',$status,set_value('status',$resident->status),'class="form-select text-uppercase" id="status" aria-label="Floating label select example"') ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">PROFESSION</label>
						<?php $profession['OTHERS'] = "OTHERS" ?>
						<?php echo form_dropdown('profession',$profession,set_value('profession',$resident->profession),'class="form-select text-uppercase" id="profession" aria-label="Floating label select example"') ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<label for="floatingInputValue">NATIONALITY</label>
						<?php echo form_dropdown('nationality',$nationality,set_value('nationality',$resident->nationality),'class="form-select text-uppercase" id="nationality" aria-label="Floating label select example"') ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
				<div class="row d-flex justify-content-center">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2 profile_pic text-center">
						<!-- <p class="fwbold">PROFILE PICTURE</p> -->
						<span id="resident_id_pic">
							<img src="<?php echo base_url().'/assets/images/profile.png' ?>" class="img-rounded"  alt="Upload Picture" id="id_view" width="200px">
						</span>
						<div class="input-group my-3">
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
							<?php echo form_dropdown('living_status',["" => "Choose...","OWNER" => "OWNER","RENTEE" => "RENTEE"],set_value('living_status',$resident->living_status),'class="form-select text-uppercase" id="living_status" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">OWNER/RENTEE</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="house_no" name="house_no" placeholder="" value="<?php echo set_value('house_no',$resident->house_no) ?>" autocomplete="off">
							<label for="floatingInputValue">HOUSE NO.</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('street',$street,set_value('street',$resident->street),'class="form-select text-uppercase" id="street" aria-label="Floating label select example"') ?>
							<!-- <select name="street" class="form-select text-uppercase" id="street" aria-label="Floating label select example">
								<option value="" selected="selected">SELECT STREET</option>
								<option value="TEST STREET">TEST STREET</option>
							</select> -->
							<label for="floatingSelect">STREET</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="barangay" name="barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
							<label for="floatingInputValue">BARANGAY</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="city" name="city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
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
							<input class="form-check-input" id="ifMarried" type="checkbox" value="" >
							<label class="form-check-label" for="ifMarried">
								If Married
							</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="spouse_name" name="spouse_name" placeholder="" value="" autocomplete="off" disabled>
							<label for="spouse_name">SPOUSE NAME</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					<?php button("ADD","Add Child",array("type"=>"button","id"=>"btnaddChild","data-bs-toggle"=>"modal","data-bs-target"=>"#add_child"),NULL,NULL); ?>
						<!-- <button type="button" id="btnaddChild" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#add_child"><i class="fa fa-plus"></i> ADD CHILD</button> -->
					</div>
				</div>
				<div class="row addChild">
					<!-- <div class="row divChild"> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<table class="table table-bordered table-hover">
							<tbody id="tblChild">
								<tr>
									<th>Action</th>
									<th>Name of Child</th>
									<th>Birth Date</th>
								</tr>
							</tbody>
						</table>
						
					</div>
				</div>
				
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				<h6 class="box-title"><i class="fas fa-id-card"></i> IDENTIFICATION INFORMATION</h6>
				<hr class="hr-box-title">
					<?php button("ADD","Add Identification Information",array("type"=>"button","data-bs-toggle"=>"modal","data-bs-target"=>"#add_id_information"),NULL,NULL); ?>

					<!-- <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_id_information"><i class="fas fa-plus"></i> Add Identification Information</a> -->

			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tbody id="tblId">
							<tr>
								<td width="5%"></td>
								<td><b>ID CARD TYPE</b></td>
								<td><b>ID NUMBER</b></td>
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
				<?php button("BACK","Back",NULL,base_url("residents"),"mt-3"); ?>
				<?php button("SAVE","Save",array('type'=>'submit' , 'id'=>'btnsave_resident'),NULL,"mt-3"); ?>
				<!-- <a href="<?php //echo base_url('residents') ?>" class="btn btn-lg btn-secondary mt-3"><i class="fas fa-chevron-left"></i> BACK</a> -->
				<!-- <button type="submit" class="btn btn-success btn-lg mt-3" id="btnsave_resident"><i class="fas fa-save"></i> SAVE</button> -->
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>

<?php echo view('modals/add_id_information')?>
<?php echo view('modals/add_child')?>
<?php echo view('modals/other_select')?>

<script>
	// $('.btnaddChild').click(function() {
    // $('.divChild').before('<div class="block"><input type="text" /><span class="remove">Remove Option</span></div>');
	// });
	// $('.addChild').on('click','.remove',function() {
	// 	$(this).parent().parent().remove();
	// });
</script>


