<?php echo form_open(base_url('project/add')) ?>
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">Projects/Programs Form</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="box-title"><i class="fas fa-edit"></i> PROJECT/PROGRAM INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
					    		<div class="form-floating">
								  <textarea class="form-control" placeholder="" name="project_title" id="title" style="height: 70px"></textarea>
								  <!-- <input type="text" class="form-control text-uppercase" id="title" name="project_title" placeholder="" value="" autocomplete="off"> -->
								  <label for="floatingInputValue">TITLE</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="" name="project_description" id="description" style="height: 120px"></textarea>
								  <label for="floatingInputValue">DESCRIPTION</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="objectives" name="project_objectives" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">OBJECTIVES/GOALS</label>
								</div>
					    	</div>
							
					    	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="beneficiaries" name="project_beneficiaries" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BENEFICIARIES/ STAKEHOLDERS</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="number" class="form-control text-uppercase" id="budget" name="project_budget" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BUDGET</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="number" class="form-control text-uppercase" id="no_of_days" name="project_no_of_days" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">NO OF DAYS</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="year" name="project_year" placeholder="" value="<?php echo date('Y')?>" autocomplete="off">
								  <label for="floatingInputValue">YEAR PRJECT</label>
								</div>
					    	</div>
							<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="date_start" name="project_date_start" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">DATE START</label>
								</div>
					    	</div> -->
					    	<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="date_end" name="project_date_end" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">DATE END</label>
								</div>
					    	</div> -->
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="project_proponent" class="form-select" id="project_proponent" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="COMMITTEE FOR EDUCATION">COMMITTEE FOR EDUCATION</option>
										<option value="PEACE AND ORDER">PEACE AND ORDER</option>
										<option value="HEALTH">HEALTH</option>
									</select>
									<label for="floatingSelect">PROPONENT</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="project_category" class="form-select" id="project_category" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="MOOE">MOOE</option>
										<option value="CO">CO</option>
										<option value="PS">PS</option>
									</select>
									<label for="floatingSelect">PROJET CATEGORY</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="" name="project_scope" id="" style="height: 200px"></textarea>
								  <label for="floatingTextarea2">SCOPE OF WORK</label>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
								<a href="<?php echo base_url('project') ?>" class="btn btn-secondary btn-lg"><i class="fas fa-chevron-left"></i> BACK</a>
								<button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> SUBMIT</button>
							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>