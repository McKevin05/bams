<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('property/edit') ?>" class="btn btn-success btn-sm float-end mt-3"><i class="fas fa-edit"></i> EDIT</a>
						<h6 class="box-title"><i class="fas fa-edit"></i> REAL ESTATE/PROPERTY INFORMATION</h6>
						<hr class="hr-box-title">
					</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<?php //var_dump($property)?>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td width="35%">
													<b>TYPE OF PROPERTY</b>
												</td>
												<td>
													<?php echo $property->property_type_of_property?>
												</td>
											</tr>
											<tr>
												<td>
													<b>OWNER/S NAME / DEVELOPER</b>
												</td>
												<td>
													<?php echo $property->property_owner?>
												
												</td>
											</tr>
											<tr>
												<td>
													<b>ADDRESS</b>
												</td>
												<td>
													<?php echo $property->property_address_house_no." ".$property->property_address_street." ".$property->property_address_barangay." ".$property->property_address_city?>
												</td>
											</tr>
											<?php if (!in_array($property->property_type_of_property,["CONDOMINIUM/BUILDING","VACANT LOTS/ OPEN SPACES"])):?>
											<tr>
												<td>
													<b>TCT NO. / PROOF-OF-OWNERSHIP</b>
												</td>
												<td>
													<?php echo $property->property_proof_of_ownership?>
												</td>
											</tr>
											<?php endif?>
											<?php if (!in_array($property->property_type_of_property,["VACANT LOTS/ OPEN SPACES"])):?>
											<tr>
												<td>
													<b>TYPE</b>
												</td>
												<td>
													<?php echo $property->property_type?>
												</td>
											</tr>
											<tr>
												<td>
													<b>NO. OF FLOORS/STOREY</b>
												</td>
												<td>
													<?php echo $property->property_floors?>
												</td>
											</tr>
											<?php endif?>
											<?php if (!in_array($property->property_type_of_property,["HOUSE","VACANT LOTS/ OPEN SPACES"])):?>
												<tr>
													<td>
														<b>NO. OF UNITS</b>
													</td>
													<td>
														<?php echo $property->property_units?>
													</td>
												</tr>
											<?php endif?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<a href="<?php echo base_url('property') ?>" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-left"></i> BACK</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>