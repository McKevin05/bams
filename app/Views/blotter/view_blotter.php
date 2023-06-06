<div class="row">
	<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php //echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php //echo base_url('blotter') ?>">List of Blotters</a></li>
						    <li class="breadcrumb-item active" aria-current="page"><?php //echo $title_page; ?></li>
						  </ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('blotter/edit') ?>" class="btn btn-success btn-sm float-end"><i class="fas fa-edit"></i> EDIT</a>
						<h6 class="fst-italic">BLOTTER INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td width="35%">
													<b>COMPLAINED DATE AND TIME</b>
												</td>
												<td>
													<?php echo $blotter->blotter_incident_start ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>RECOMMENDATION</b>
												</td>
												<td>
													<?php echo $blotter->blotter_complaint_recommendation ?>
												</td>
											</tr>
											<tr>
												<td>
													<b>COMPLAINT STATUS</b>
												</td>
												<td>
													<?php echo $blotter->blotter_complaint_status ?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-floating">
									  <textarea class="form-control" placeholder="Leave a comment here" name="nature_of_complaint" id="nature_of_complaint" style="height: 200px" disabled><?php echo $blotter->blotter_nature_of_complaint ?></textarea>
									  <label for="floatingTextarea2">DETAILS OF COMPLAIN OR CASE DESCRIPTION</label>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<a href="<?php echo base_url('property/edit') ?>" class="btn btn-success btn-sm float-end"><i class="fas fa-edit"></i> EDIT</a>
								<h6 class="fst-italic">REAL ESTATE/PROPERTY INFORMATION</h6>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td colspan="4"  class="text-center">
													<b>COMPLAINANTS</b>
												</td>
											</tr>
											<tr>
												<td><b>NAME</b></td>
												<td><b>CONTACT NUMBER</b></td>
												<td><b>COMPLETE ADDRESS</b></td>
											</tr>
											<tr>
												<td><?php echo $blotter->blotter_complaint_name  ?></td>
												<td><?php echo $blotter->blotter_complaint_contact_no  ?></td>
												<td><?php echo $blotter->blotter_complaint_address  ?></td>
											</tr>
										</tbody>
									</table>
									<table class="table table-bordered table-hover mt-2">
										<tbody>
											<tr>
												<td colspan="4" class="text-center">
													<b>RESPONDENTS</b>
												</td>
											</tr>
											<tr>
												<td><b>NAME</b></td>
												<td><b>CONTACT NUMBER</b></td>
												<td><b>COMPLETE ADDRESS</b></td>
											</tr>
											<tr>
												<td><?php echo $blotter->blotter_respondent_name  ?></td>
												<td><?php echo $blotter->blotter_respondent_contact_no  ?></td>
												<td><?php echo $blotter->blotter_respondent_address  ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-center">
						<a href="<?php echo base_url('blotter') ?>" class="btn btn-success btn-sm"><i class="fas fa-chevron-left"></i> Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>