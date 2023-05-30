<div class="row residents-ct">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						
						<h3 class="sub-title">Resident Information</h3>
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						
						<div class="alert alert-danger">
							<strong>Title!</strong><br>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus expedita obcaecati tenetur eaque sint ipsum in suscipit blanditiis facere vel.
						</div>
						
					</div> -->
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <a href="<?php // echo base_url('residents/add') ?>" class="btn btn-success float-end mt-3"><i class="fas fa-edit"></i> EDIT</a> -->
						<h6 class="box-title"><i class="fas fa-user-edit"></i> PERSONAL INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="row">
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 profile_pic text-center">
					    		<p class="fw-bold mb-2">PROFILE PICTURE</p>
					    		<img src="<?php echo base_url().'/assets/images/profile.png' ?>" class="rounded"  alt="Upload Picture">
					    	</div>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td width="35%">
													RESIDENT ID NO.
												</td>
												<td>
													<b><?php echo $profile->resident_info_id ?></b>
												</td>
											</tr>
											<tr>
												<td>
													LAST NAME
												</td>
												<td>
													<b><?php echo $profile->lastname ?></b>
												</td>
											</tr>
											<tr>
												<td>
													FIRST NAME
												</td>
												<td>
													<b><?php echo $profile->firstname ?></b>
												</td>
											</tr>
											<tr>
												<td>
													MIDDLE NAME
												</td>
												<td>
													<b><?php echo $profile->middlename ?></b>
												</td>
											</tr>
											<tr>
												<td>
													NAME SUFFIX
												</td>
												<td>
													<b><?php echo $profile->suffix_name ?></b>
												
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
                                            <tr>
												<td width="35%">
													GENDER
												</td>
												<td>
													<b><?php echo $profile->gender_desc ?></b>
												</td>
											</tr>
											
											<tr>
												<td>
													AGE
												</td>
												<td>
													<b></b>
												</td>
											</tr>
											<tr>
												<td>
													BIRTHDATE
												</td>
												<td>
													<b><?php echo $profile->bdate ?></b>
												</td>
											</tr>
											<tr>
												<td>
													CONTACT NUMBER
												</td>
												<td>
													<b><?php echo $profile->contact_no ?></b>
												</td>
											</tr>
											<tr>
												<td>
													NATIONALITY
												</td>
												<td>
													<b><?php echo $profile->nationality ?></b>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
					
					</div>
					<?php //var_dump($profile)?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<h6 class="box-title"><i class="fas fa-map-marker-alt"></i> ADDRESS INFORMATION</h6>
						<hr class="hr-box-title">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td>
											<?php echo $profile->living_status?>
										</td>
										<td>
											<?php echo $profile->house_no." ".$profile->street_desc?> Pio Del Pilar, Makati City
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-center">
							<?php  button("BACK","Back",NULL,base_url("residents"),NULL); ?>
						</div>
						
				</div>
			</div>
		</div>
	</div>

</div>