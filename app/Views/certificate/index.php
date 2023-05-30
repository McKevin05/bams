<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						
						<h3 class="sub-title">List of Requested Certificates/Permits</h3>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php button("ADD","Add New Certificate/Permit ",NULL,base_url('certificate/add'),NULL); ?>
						<!-- <a href="<?php // echo base_url('certificate/add') ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Certificate/Permit</a> -->
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Name</option>
						      <option value="2">Type of Certificate/Permit</option>
						      <option value="2">Status</option>
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
										<th>Name</th>
										<th>Type of Certificate/Permit</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $cnt= 0; foreach ($requestCert as $row):?>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>