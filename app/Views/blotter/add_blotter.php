<?php echo form_open(base_url('blotter/add')) ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
							
						<h3 class="sub-title">Blotter Form</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h6 class="box-title"><i class="fas fa-edit"></i> BLOTTER INFORMATION</h6>
								<hr class="hr-box-title">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="datetime-local" class="form-control text-uppercase" id="incident_start" name="blotter_incident_start" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">COMPLAINED DATE AND TIME</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="blotter_complaint_recommendation" class="form-select" id="complaint_recommendation" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT RECOMMENDATION</option>
										<option value="FOR HEARING">FOR HEARING</option>
										<option value="FOR SUMMONS">FOR SUMMONS</option>
									</select>
									<label for="floatingSelect">RECOMMENDATION</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="blotter_complaint_status" class="form-select" id="complaint_status" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT STATUS</option>
										<option value="OPEN">OPEN</option>
										<option value="CLOSE">CLOSE</option>
									</select>
									<label for="floatingSelect">STATUS</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="Leave a comment here" name="blotter_nature_of_complaint" id="nature_of_complaint" style="height: 200px"></textarea>
								  <label for="floatingTextarea2">DETAILS OF COMPLAIN OR CASE DESCRIPTION</label>
								</div>
							</div>
					    </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="box-title"><i class="fas fa-edit"></i> COMPLAINANT INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <p>
							<small>If Not Resident click <b>Add Complainant</b> and if Resident click <b>Search Resident</b></small>
						</p>
						<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						<a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_complainant"><i class="fas fa-plus-circle"></i> Add Complainant</a> -->
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">
								<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="complaint_name" name="blotter_complaint_name" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">COMPLAINED NAME</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="complaint_name" name="blotter_complaint_contact_no" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">COMPLAINED CONTACT</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="complaint_name" name="blotter_complaint_address" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">COMPLAINED ADDRESS</label>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td><b>#</b></td>
												<td><b>NAME</b></td>
												<td><b>CONTACT NUMBER</b></td>
												<td><b>COMPLETE ADDRESS</b></td>
												<td><b>ACTION</b></td>
											</tr>
											<tr>
												<td>1</td>
												<td>Mc Jayvee Ortiz Diaz</td>
												<td>09123457</td>
												<td>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD</td>
												<td><a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_complainant"><i class="fas fa-times"></i> Delete</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
					    </div>
					</div> -->
				</div>	
			</div>	
		</div>	
	</div>	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="box-title"><i class="fas fa-edit"></i> RESPONDENTS INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <p>
							<small>If Not Resident click <b>Add Respondent</b> and if Resident click <b>Search Resident</b></small>
						</p>
						<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						<a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_respondents"><i class="fas fa-plus-circle"></i> Add Respondent</a> -->
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">
								<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="respondent_name" name="blotter_respondent_name" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">RESPONDENT NAME</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="respondent_name" name="blotter_respondent_contact_no" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">RESPONDENT CONTACT</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
									<input type="text" class="form-control text-uppercase" id="respondent_name" name="blotter_respondent_address" placeholder="" value="" autocomplete="off">
									<label for="floatingInputValue">RESPONDENT ADDRESS</label>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td><b>#</b></td>
												<td><b>NAME</b></td>
												<td><b>CONTACT NUMBER</b></td>
												<td><b>COMPLETE ADDRESS</b></td>
												<td><b>ACTION</b></td>
											</tr>
											<tr>
												<td>1</td>
												<td>Juan S. Dela Cruz</td>
												<td>09123457</td>
												<td>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD</td>
												<td><a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_repondent"><i class="fas fa-times"></i> Delete</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
					    </div>
					</div> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
						<a href="<?php echo base_url('blotter') ?>" class="btn btn-secondary btn-lg"><i class="fas fa-chevron-left"></i> BACK</a>
						<button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>