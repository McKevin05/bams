<div class="card rounded-0 residents-ct" style="min-width: 280px;">
	<div class="card-body">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				
				<h3 class="sub-title">Resident Information</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- <a href="<?php //echo base_url('residents/add') ?>" class="btn btn-success float-end mt-3"><i class="fas fa-edit"></i> EDIT</a> -->
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
											<b><?php echo $profile->resident_code ?></b>
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
											MARITAL STATUS
										</td>
										<td>
											<b><?php echo $profile->civil_status_desc ?></b>
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
										<td>
											AGE
										</td>
										<td>
											<b><?php 
												$date1 = date_create($profile->bdate);
												$date2 = date_create(date('Y-m-d'));
												$diff  = date_diff($date1,$date2);
												echo $diff->format("%y");
												// echo ""
											?></b>
										</td>
									</tr>
									<tr>
										<td>
											BIRTHDATE
										</td>
										<td>
											<b><?php echo date("F d, Y",strtotime($profile->bdate)) ?></b>
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
											LENGTH OF STAY
										</td>
										<td>
											<b><?php 
												if (!empty($profile->lenghtOfStay) && $profile->lenghtOfStay != "0000-00-00" ) 
												{
													$date1 = date_create($profile->lenghtOfStay);
													$date2 = date_create(date('Y-m-d'));
													$diff  = date_diff($date1,$date2);
													echo $diff->format("%y");
												}
												// echo ""
											?></b>
										</td>
									</tr>
									<tr>
										<td>
											PROFESSION
										</td>
										<td>
											<b><?php echo $profile->profession ?></b>
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
			<div class="clearfix"></div>
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
				<h6 class="box-title"><i class="fas fa-map-marker-alt"></i> FAMILY BACKGROUND</h6>
				<hr class="hr-box-title">
				<div class="table-responsive">
					<?php if (count($family)): ?>
						<table class="table table-bordered table-hover">
							<tbody>
								<tr>
									<td colspan="2"><b>SPOUSE'S NAME:</b><?php echo $profile->spouse_name ?> </td>
								</tr>
								<tr>
									<td><b>NAME OF CHILD</b></td>
									<td><b>DATE OF BIRTH</b></td>
								</tr>
								<?php foreach ($family as $key => $row): ?>
									<tr>
										<td><?php echo $row->dependencies_name ?></td>
										<td><?php echo $row->dependencies_bdate ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					<?php else: ?>
						<div class="alert alert-info" role="alert">
							NO INFORMATION FOUND
						</div>
					<?php endif ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
				<h6 class="box-title"><i class="fas fa-id-card"></i> IDENTIFICATION INFORMATION</h6>
				<hr class="hr-box-title">
				<div class="table-responsive">
					<?php if (count($ids)): ?>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>ID CARD TYPE</th>
									<th>ID NUMBER</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($ids as $key => $row): ?>
									<tr>
										<td><?php echo $row->id_type_desc ?></td>
										<td><?php echo $row->card_number ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					<?php else: ?>
						<div class="alert alert-info" role="alert">
							NO INFORMATION FOUND
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card rounded-0 residents-ct mt-3" style="min-width: 280px;">
	<div class="card-body">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <button type="submit" class="btn btn-success float-end "><i class="fas fa-edit"></i> EDIT</button> -->
						<h6 class="box-title"><i class="fas fa-home"></i> PROPERTY INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<?php if (count($property)): ?>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Type of Property</th>
											<th>Owner/s Name / Developer</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $cnt = 0; foreach ($property as $key => $row): ?>
											<tr>
												<td><?php echo $cnt+=1 ?></td>
												<td><?php echo $row->property_type_of_property ?></td>
												<td><?php echo $row->property_owner ?></td>
												<th><a href="<?php echo base_url("property/view/{$row->property_id}") ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Property"><i class="fas fa-eye"></i></a></th>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						<?php else: ?>
							<div class="alert alert-info" role="alert">
								NO INFORMATION FOUND
							</div>
						<?php endif ?>

					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <button type="submit" class="btn btn-success float-end "><i class="fas fa-edit"></i> EDIT</button> -->
						<h6 class="box-title"><i class="fa fa-file"></i> CERTIFICATE INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<?php if (count($cert)): ?>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Type of Certificate/Permit</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $cnt= 0; foreach ($cert as $row):?>
										<tr>
											<td><?php echo $cnt+=1;?></td>
											<td><?php echo $row->name;?></td>
											<td><?php echo $row->certificates_desc?></td>
											<td>RELEASED</td>
											<!-- <td>PURPOSE</td> -->
											<th>
												<?php button("VIEW","View",NULL,base_url("certificate/view/{$row->request_certificates_id}"),NULL); ?>
												<!-- <a href="<?php //echo base_url('certificate/view').'/'.$row->request_certificates_id ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Certificate/Permit"><i class="fas fa-eye"></i></a> -->
											</th>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						<?php else: ?>
							<div class="alert alert-info" role="alert">
								NO INFORMATION FOUND
							</div>
						<?php endif ?>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <button type="submit" class="btn btn-success float-end "><i class="fas fa-edit"></i> EDIT</button> -->
						<h6 class="box-title"><i class="fa fa-building"></i> BUSINESS INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<?php if (count($business)): ?>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Business Type</th>
											<th>Line of Business</th>
											<th>Business Name</th>
											<th>Plate No.</th>
											<th>Status</th>
											<th>Validity/Expiry</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($business as $key => $row): ?>
											<tr class="
												<?php
													if($row->business_status == 0)
													{
														echo 'table-danger'; 
													}
													elseif($row->business_status == 1)
													{
														echo 'table-success'; 
													}
													elseif($row->business_status == 2)
													{
														echo 'table-warning'; 
													}
												
												?>
											">
												<td><?php echo ++$key?></td>
												<td><?php echo $row->business_type?></td>
												<td><?php echo $row->business_line_desc?></td>
												<td><?php echo $row->business_name?></td>
												<td><?php echo $row->business_plate_no?></td>
												<td><?php 
														if($row->business_eval_status == 1)
															echo '<span class="badge text-bg-success">Approved</span>';
														elseif($row->business_eval_status == 2)
															echo '<span class="badge text-bg-danger">Disapproved</span>';
														else
															echo '<span class="badge text-bg-secondary">For Approval</span>';
													?>
												</td>
												<td><?php echo $row->business_clearance_validity?></td>
												<th><a href="<?php echo base_url("business/view/{$row->business_id}") ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Business"><i class="fas fa-eye"></i></a></th>
											</tr>
										<?php endforeach ?>
										
									</tbody>
								</table>
							</div>
						<?php else: ?>
							<div class="alert alert-info" role="alert">
								NO INFORMATION FOUND
							</div>
						<?php endif ?>
						
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <button type="submit" class="btn btn-success float-end "><i class="fas fa-edit"></i> EDIT</button> -->
						<h6 class="box-title"><i class="fa fa-file-contract"></i> CASES INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<?php if (count($cases)): ?>
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<!-- <thead>
										<tr>
											<th>NAME</th>
											<th>SUBMISSION DATE</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>M00001</td>
											<td>APRIL 2017</td>
											<td><a href="<?php //echo base_url('property/view/id') ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Property"><i class="fas fa-eye"></i> View</a></td>
										</tr>
									</tbody> -->
								</table>
							</div>
						<?php else: ?>
							<div class="alert alert-info" role="alert">
								NO INFORMATION FOUND
							</div>
						<?php endif ?>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-center">
					<?php  button("BACK","Back",NULL,base_url("residents"),NULL); ?>
				</div>
				
				<!-- <a href="<?php //echo base_url('residents') ?>" class="btn btn-lg btn-secondary mt-3"><i class="fas fa-chevron-left"></i> BACK</a> -->
			</div>
		</div>
	</div>
</div>