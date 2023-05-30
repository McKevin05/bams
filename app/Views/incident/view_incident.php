<div class="row">>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('incident/edit') ?>" class="btn btn-success mt-3 float-end"><i class="fas fa-edit"></i> EDIT</a>
						<h6 class="box-title"><i class="fas fa-edit"></i> INCIDENT INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td width="35%">
											<b>INCIDENT DATE AND TIME</b>
										</td>
										<td>
											<?php echo $incident->incident_datetime ?>
										</td>
									</tr>
									<tr>
										<td>
											<b>ACTION TAKEN</b>
										</td>
										<td>
											<?php echo $incident->incident_action_taken ?>
										</td>
									</tr>
									<tr>
										<td>
											<b>DESK OFFICER/ SECURITY OFFICER <br>INCHARGE/ON-DUTY</b>
										</td>
										<td>
											<?php echo $incident->incident_incharge ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">
						<div class="form-floating">
						  <textarea class="form-control" placeholder="Leave a comment here" name="nature_of_complaint" id="nature_of_complaint" style="height: 170px" disabled><?php echo $incident->incident_description ?></textarea>
						  <label for="floatingTextarea2">INCIDENT DESCRIPTION/DETAILS</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
						<a href="<?php echo base_url('incident') ?>" class="btn btn-secondary btn-lg"><i class="fas fa-chevron-left"></i> BACK</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>