<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">List of Incident</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('incident/add') ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Incident</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Action Taken</option>
						      <option value="1">Incident Description</option>
						      <option value="2">Officer</option>
						    </select>
						  </div>
						  <div class="col-12">
						    <label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
						      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
						  </div>
						  <div class="col-12">
						    <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
						  </div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Incident Description/Details</th>
										<th>Incident Date and Time</th>
										<th>Action Taken</th>
										<th>Desk Officer/ Security Officer Incharge/On-Duty</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $cnt = 0; foreach ($list as $key => $row): ?>
										<tr>
											<td><?php echo $cnt+=1 ?></td>
											<td><?php echo $row->incident_description ?></td>
											<td><?php echo $row->incident_datetime ?></td>
											<td><?php echo $row->incident_action_taken ?></td>
											<td>JUAN <?php echo $row->incident_incharge ?></td>
											<th><a href="<?php echo base_url("incident/view/{$row->incident_id}") ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Incident"><i class="fas fa-eye"></i></a></th>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>