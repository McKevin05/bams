<div class="row print_hide">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- <a href="<?php //echo base_url('certificate/edit') ?>" class="btn btn-success mt-3 float-end"><i class="fas fa-edit"></i> EDIT</a> -->
						<h6 class="box-title"><i class="fas fa-edit"></i>CERTIFICATE/PERMIT INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="fst-italic">CERTIFICATE/PERMIT INFORMATION</h6>
					</div> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td>
													<b>TYPE OF CERTIFICATE/PERMIT</b>
												</td>
												<td>
													<?php echo $ceritficate_type?>
												</td>
											</tr>
											<tr>
												<td width="35%">
													<b>NAME</b>
												</td>
												<td>
													<?php echo $name?>
												</td>
											</tr>
											<tr>
												<td>
													<b>LOCATED ADDRESS</b>
												</td>
												<td>
													<?php echo $located_address?>
												</td>
											</tr>
											<tr>
												<td>
													<b>AGE</b>
												</td>
												<td>
													<?php echo $age?>
												</td>
											</tr>
											<tr>
												<td>
													<b>CIVIL STATUS</b>
												</td>
												<td>
													<?php echo $civil_status?>
												</td>
											</tr>
											<tr>
												<td>
													<b>STATUS</b>
												</td>
												<td>
													RELEASED
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
									<?php button("BACK","Back",NULL,base_url("certificate"),NULL); ?>
									<?php button("PRINT","Print",array("onclick" => "window.print()"),NULL,NULL); ?>
									
								</div>
								
								
								<!-- <a href="<?php //echo base_url('certificate') ?>" class="btn btn-success btn-lg"><i class="fas fa-chevron-left"></i> Back</a> -->
								<!-- <a onclick="window.print()" class="btn btn-secondary btn-lg"><i class="fas fa-print"></i> Print</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

