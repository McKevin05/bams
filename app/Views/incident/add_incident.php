<?php echo form_open(base_url('incident/add')) ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">Incident Form</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h6 class="box-title"><i class="fas fa-edit"></i> INCIDENT INFORMATION</h6>
								<hr class="hr-box-title">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="datetime-local" class="form-control text-uppercase" id="incident_datetime" name="incident_datetime" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">INCIDENT DATE AND TIME</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="action_taken" name="incident_action_taken" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">ACTION TAKEN</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="incharge" name="incident_incharge" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">DESK OFFICER/ SECURITY OFFICER INCHARGE/ON-DUTY</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="Leave a comment here" name="incident_description" id="incident_description" style="height: 200px"></textarea>
								  <!-- <label for="floatingTextarea2">INCIDENT DESCRIPTION/ DETAILS (3WS)</label> -->
								  <label for="floatingTextarea2">INCIDENT DESCRIPTION/ DETAILS</label>
								</div>
							</div>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
						<a href="<?php echo base_url('incident') ?>" class="btn btn-secondary btn-lg"><i class="fas fa-chevron-left"></i> BACK</a>
						<button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> SUBMIT</button>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
<!-- 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="fst-italic">COMPLAINANT INFORMATION</h6>
						<p>
							<small>If Not Resident click <b>Add Complainant</b> and if Resident click <b>Search Resident</b></small>
						</p>
						<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						<a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_complainant"><i class="fas fa-plus-circle"></i> Add Complainant</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
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
						<h6 class="fst-italic">RESPONDENTS INFORMATION</h6>
						<p>
							<small>If Not Resident click <b>Add Respondent</b> and if Resident click <b>Search Resident</b></small>
						</p>
						<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						<a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_respondents"><i class="fas fa-plus-circle"></i> Add Respondent</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
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
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
						<button type="submit" class="btn btn-success">SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>
<?php echo form_close() ?>
