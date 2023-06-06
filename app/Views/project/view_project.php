<div class="row">
	<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php //echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php //echo base_url('project->project') ?>">List of Projects and Programs</a></li>
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
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">Projects/Programs Form</h3>
					</div> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <a href="<?php //echo base_url('project/edit') ?>" class="btn btn-success mt-3 float-end"><i class="fas fa-edit"></i> EDIT</a> -->
						<h6 class="box-title"><i class="fas fa-edit"></i> PROJECT/PROGRAM INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td>
													<b>TITLE</b>
												</td>
											</tr>
											<tr>
												<td>
													<?php echo $project->project_title ?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-floating">
									  <textarea class="form-control" placeholder="Leave a comment here" name="nature_of_complaint" id="nature_of_complaint" style="height: 200px" disabled><?php echo $project->project_description ?></textarea>
									  <label for="floatingTextarea2">DESCRIPTION</label>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td><b>OBJECTIVES/GOALS</b></td>
												<td><b>BUDGET</b></td>
												<td><b>PROPONENT</b></td>
											</tr>
											<tr>
												<td><?php echo $project->project_objectives ?></td>
												<td><?php echo $project->project_budget ?></td>
												<td><?php echo $project->project_proponent ?></td>
											</tr>
											<tr>
												<td><b>BENEFICIARIES/ STAKEHOLDERS</b></td>
												<td><b>DATE START</b></td>
												<td><b>DATE END</b></td>
											</tr>
											<tr>
												<td><?php echo $project->project_beneficiaries ?></td>
												<td><?php echo $project->project_date_start ?></td>
												<td><?php echo $project->project_date_start ?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-floating">
									  <textarea class="form-control" placeholder="Leave a comment here" name="nature_of_complaint" id="nature_of_complaint" style="height: 200px" disabled><?php echo $project->project_beneficiaries ?></textarea>
									  <label for="floatingTextarea2">REVIEW/ FEEDBACK</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
						<a href="<?php echo base_url('project') ?>" class="btn btn-secondary btn-lg"><i class="fas fa-chevron-left"></i> BACK</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>