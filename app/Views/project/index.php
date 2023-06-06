<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
					<h3 class="sub-title">List of Projects/Programs</h3>
				</div>
				<div class="row">
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php // echo base_url('project/add') ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Project/Program</a>
					</div> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="Title">Title</option>
						      <!-- <option value="Proponent">Proponent</option> -->
						      <option value="Year">Year</option>
						    </select>
						  </div>
						  <div class="col-12">
						    <label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
						      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
						  </div>
						  <div class="col-12">
						    <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
						    <!-- <a href="<?php // echo base_url('project/download/2023')?>" class="btn btn-secondary mt-3"><i class="fas fa-download"></i> Generate AIP</a> -->
						  </div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Year</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php //foreach ($list as $key => $row): ?>
										<tr>
											<td><?php echo "1" ?></td>
											<td><?php echo "2023" ?></td>
											<th><a href="<?php echo base_url("project/year/2023") ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View project"><i class="fas fa-eye"></i> View</a></th>
										</tr>
									<?php //endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>