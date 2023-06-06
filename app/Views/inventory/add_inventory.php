<?php echo form_open(base_url('inventory/add')) ?>
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">Inventory Form</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="box-title"><i class="fas fa-edit"></i> INVENTORY FORM</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="inventory_borrowers" name="inventory_borrowers" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BORROWERS NAME</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="" name="inventory_description" id="inventory_description" style="height: 120px"></textarea>
								  <label for="floatingInputValue">DESCRIPTION</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="inventory_serial_number" name="inventory_serial_number" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">SERIAL NUMBER</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2 mb-2">
					    		<div class="">
								  <!-- <input type="text" class="form-control text-uppercase" id="inventory_category" name="inventory_category" placeholder="" value="" autocomplete="off"> -->
								  <label for="floatingInputValue">CATEGORY</label>
								  <select class="form-select form-select-lg" aria-label="Default select example">
								    <option selected>SELECT CATEGORY</option>
								    <option value="1">Category 1</option>
								    <option value="2">Category 2</option>
								    <option value="3">Category 3</option>
								  </select>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2 mb-2">
					    		<div class="">
								  <!-- <input type="text" class="form-control text-uppercase" id="inventory_office" name="inventory_office" placeholder="" value="" autocomplete="off"> -->
								  <label for="floatingInputValue">OFFICE</label>
								  <select class="form-select form-select-lg" aria-label="Default select example">
								    <option selected>SELECT OFFICE</option>
								    <option value="1">Office 1</option>
								    <option value="2">Office 2</option>
								    <option value="3">Office 3</option>
								  </select>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2 mb-2">
					    		<div class="">
								  <!-- <input type="text" class="form-control text-uppercase" id="inventory_status" name="inventory_status" placeholder="" value="" autocomplete="off"> -->
								  <label for="floatingInputValue">STATUS</label>
								  <select class="form-select form-select-lg" aria-label="Default select example">
								    <option selected>SELECT STATUS</option>
								    <option value="1">ON-GOING</option>
								    <option value="2">PENDING</option>
								    <option value="3">COMPLETED</option>
								    <option value="3">CANCELLED</option>
								  </select>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2 mb-2">
					    		<div class="">
								  <!-- <input type="text" class="form-control text-uppercase" id="inventory_unit" name="inventory_unit" placeholder="" value="" autocomplete="off"> -->
								  <label for="floatingInputValue">UNIT</label>
								  <select class="form-select form-select-lg" aria-label="Default select example">
								    <option selected>SELECT UNIT</option>
								    <option value="1">UNIT 1</option>
								    <option value="2">UNIT 2</option>
								    <option value="3">UNIT 3</option>
								  </select>
								</div>
					    	</div>
					    	
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					    		<hr>
					    	</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
								<a href="<?php echo base_url('inventory') ?>" class="btn btn-secondary"><i class="fas fa-chevron-left"></i> BACK</a>
								<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> SUBMIT</button>
							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>