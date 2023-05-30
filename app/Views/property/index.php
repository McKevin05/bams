<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
							
						<h3 class="sub-title">List of Real Estate/Properties</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php button("ADD","Add New Property ",NULL,base_url('property/add'),NULL); ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Type Property</option>
						      <option value="2">Owner/s Name / Developer</option>
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
										<th>Type of Property</th>
										<th>Owner/s Name / Developer</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $cnt = 0; foreach ($list as $key => $row): ?>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>