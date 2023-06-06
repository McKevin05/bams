<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <a href="<?php //echo base_url('business/edit') ?>" class="btn btn-success btn-sm float-end"><i class="fas fa-edit"></i> EDIT</a> -->
						<h6 class="fst-italic">REGISTERED BUSINESS INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h6 class="box-title"><i class="fas fa-user-edit"></i> BUSINESS INFORMATION</h6>
								<hr class="hr-box-title">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td>
													<b>CONTROL NO.</b>
												</td>
												<td>
													<?php echo "BP2023-00".$business->business_id; ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>DATE APPLIED</b>
												</td>
												<td>
													<?php echo $business->business_date_applied? date("F d, Y",strtotime($business->business_date_applied)):"" ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>BUSINESS NAME</b>
												</td>
												<td>
													<?php echo $business->business_name ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>BUSINESS OWNER/S</b>
												</td>
												<td>
													<?php echo $business->business_owner ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>AUTHORIZED REPRESENTATIVE</b>
												</td>
												<td>
													<?php echo $business->business_authorized_rep ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>POSITION</b>
												</td>
												<td>
													<?php echo $business->business_position ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>BUSINESS ADDRESS</b>
												</td>
												<td>
													<?php echo $business->business_address_house_no." ".$business->street_desc." ".$business->business_address_barangay." ".$business->business_address_city ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>LINE OF BUSINESS</b>
												</td>
												<td>
													<?php echo $business->business_line_desc ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>TYPE OF OWNERSHIP</b>
												</td>
												<td>
													<?php echo $business->business_type_ownership ?>
												</td>
											</tr>
											
											<tr>
												<td>
													<b>DTI REGISTERED NO.</b>
												</td>
												<td>
													<?php echo $business->business_dti_no; ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>DTI DATE OF ISSUE</b>
												</td>
												<td>
													<?php echo date("F d, Y",strtotime($business->business_dti_issued)) ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>SEC. NO.</b>
												</td>
												<td>
													<?php echo $business->business_sec_no; ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>SEC. DATE OF ISSUE</b>
												</td>
												<td>
													<?php echo date("F d, Y",strtotime($business->business_sec_issued)) ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>TIN NO.</b>
												</td>
												<td>
													<?php echo $business->business_tin_no; ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>PAID UP CAPITAL</b>
												</td>
												<td>
													<?php echo $business->business_paid_up_capital; ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>BUSINESS PLATE NO.</b>
												</td>
												<td>
													<?php echo $business->business_plate_no; ?>
													<!-- Modal trigger button -->
													<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#plate_no">
														<i class="fa fa-edit"></i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td width="30%">
													<b>MOBILE NO.</b>
												</td>
												<td>
													<?php echo $business->business_mobile_no; ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>OFFICE NO.</b>
												</td>
												<td>
													<?php echo $business->business_office_no?>
												</td>
											</tr>
											<tr>
												<td>
													<b>FAX NO.</b>
												</td>
												<td>
													<?php echo $business->business_fax_no?>
												</td>
											</tr>
											<tr>
												<td>
													<b>EMAIL</b>
												</td>
												<td>
													<?php echo $business->business_email ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>WEBSITE</b>
												</td>
												<td>
													<?php echo $business->business_website ?>
												</td>
											</tr>
											
											
										</tbody>
									</table>
								</div>
								
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h6 class="box-title"><i class="fa fa-list"></i> Clearance</h6>
								<hr class="hr-box-title">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 my-3">
								<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#md_clearance"><i class="fas fa-edit"></i> CREATE/APPLY</button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<table class="table table-bordered table-hover">
									<thead>
										<th>#</th>
										<th>BC No.</th>
										<th>Date Applied</th>
										<th>Date Validity/Expiration</th>
										<th>Tax Mapping Status</th>
										<th>Remarks for Printing</th>
										<th>Status</th>
										<th>Type</th>
										<th>Action</th>
									</thead>
									
									<?php foreach ($clearance as $key => $row): ?>
										<tbody>
											<td><?php echo ++$key ?></td>
											<td><?php echo $row->business_clearance_no ?></td>
											<td><?php echo $row->business_other_created_at ?></td>
											<td><?php echo $row->business_clearance_validity ?></td>
											<td>
												<?php if ($row->business_eval_status == 1): ?>
													<span class="badge text-bg-success">Approved</span>
													<div class="bd-callout bd-callout-info">
														<p class="highlight"><b>Comment</b>: <?php echo $row->business_comment ?></p>
													</div>
												<?php elseif($row->business_eval_status == 2): ?>
													<span class="badge text-bg-danger">Disapproved</span>
													<div class="bd-callout bd-callout-info">
														<p class="highlight"><b>Comment</b>: <?php echo $row->business_comment ?></p>
													</div>
												<?php else: ?>
													<span class="badge text-bg-secondary">In Progress</span>
												<?php endif ?>
											</td>
											<td><?php echo $row->business_clearance_remarks ?></td>
											<td><?php echo $status[$row->business_clearance_status] ?></td>
											<td><?php echo $row->business_clearance_type ?></td>
											<td>
												<!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#disposed"><i class="fas fa-edit"></i> Dispose</button> -->
												<button class="btn btn-secondary printClearance"  data-url="<?php echo base_url('business/'.$row->business_other_details_id.'/print_clearance') ?>"><i class="fas fa-print"></i> Print</button>
											</td>
										</tbody>
									<?php endforeach ?>
									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<?php echo form_open('business/update'); ?>
<?php echo form_hidden('business_id',$business->business_id); ?>
<div class="modal fade" id="plate_no" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitleId">BUSINESS PLATE NO.</h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="business_plate_no" name="business_plate_no" placeholder="" value="<?php echo $business->business_plate_no ?>" autocomplete="off">
							<label for="floatingInputValue">BUSINESS PLATE NO.</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center ">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>

<?php echo form_open('business/save_clearance'); ?>
<?php echo form_hidden('business_other_business_id',$business->business_id); ?>
<div class="modal fade" id="md_clearance" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitleId">Apply/Create Clearance</h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<?php $validity =(date('Y') + 1)."-01-20";?>	
						<div class="form-floating mb-3">
							<input type="date" class="form-control text-uppercase"  name="business_clearance_validity" placeholder="" value="<?php echo $validity ?>" autocomplete="off">
							<label for="floatingInputValue">Validity/ Expiration Date</label>
						</div>
						<div class="form-floating mb-3">
						  <select class="form-select" id="floatingSelect" name="business_clearance_type" aria-label="Floating label select example">
						    <option value="NEW" selected>NEW</option>
						    <option value="RENEW">RENEW</option>
						  </select>
						  <label for="floatingSelect">New/ Renew </label>
						</div>
							<div class=""><small>Note: You are to create/apply business clearance previous clearance will be override.</small></div>
					</div>
				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center text-center">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close() ?>


<!-- Modal -->
<div class="modal fade" id="add_remarks" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitleId">Add Remarks on Printing</h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="mb-3">
						  <textarea class="form-control" name="" id="" rows="3"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center text-center">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="disposed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reason for Dispose</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
				<div class="mb-3">
				  <textarea class="form-control" name="" id="" rows="3"></textarea>
				</div>
			</div>
		</div>
      </div>
      <div class="modal-footer d-flex justify-content-center text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>