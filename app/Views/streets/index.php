<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a class="btn btn-sm btn-success btnaction" 
							data-bs-toggle="modal" 
							data-bs-target="#add_street" 
							data-url="<?php echo $form_add ?>"
							data-action="add">							
							<i class="fas fa-plus-circle"></i> 
							Add New Street
						</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<?php echo form_open(NULL,'class="row row-cols-lg-auto g-3 align-items-center"') ?>
						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search Street:</label>
						      <input type="text" name="search_street" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
						  </div>
						  <div class="col-12">
						    <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
						  </div>
						<?php echo form_close() ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th width="5%">#</th>
										<th>STREET NAME</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php $count =0; foreach ($streets as $key => $streets): ?>
										<tr>
											<td><?php echo ++$count ?></td>
											<td><?php echo $streets->street_name ?></td>
											<th>
												<a 	class="btn btn-success btn-sm btnaction"  
													data-bs-toggle="modal" 
													data-bs-target="#add_street"
													data-id="<?php echo $streets->street_id  ?>" 
													data-url="<?php echo $form_edit.'/'.$streets->street_id  ?>"
													data-action="edit"
													data-name="<?php echo $streets->street_name  ?>" >
													<i class="fas fa-edit"></i> 
													Edit
												</a>
												<a class="btn btn-danger btn-sm btnaction" 
													data-action="delete" 
													data-bs-toggle="modal" 
													data-name="<?php echo $streets->street_name  ?>" 
													data-url="<?php echo $form_delete ?>"
													data-id="<?php echo $streets->street_id  ?>" 
													data-action="edit"
													data-bs-target="#delete_street">
													<i class="fas fa-times"></i> 
													Delete
												</a>
											</th>
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