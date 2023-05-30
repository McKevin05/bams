<?php echo form_open(base_url('property/add')) ?>

<div class="row mb-5">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
							
							<h3 class="sub-title">Real Estate/Property Form</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="alert alert-info" role="alert">
									<strong>Note:</strong> Choose first Type of Property
								</div>
								
							</div>	 -->
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2 " onchange="showDiv('append_data','floatingSelectV')">
								<div class="form-floating">
									<select name="property_type_of_property" class="form-select" id="floatingSelectV" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="HOUSE">HOUSE</option>
										<option value="APARTMENT">APARTMENT</option>
										<option value="CONDOMINIUM/BUILDING">CONDOMINIUM/BUILDING</option>
										<option value="VACANT LOTS/ OPEN SPACES">VACANT LOTS/ OPEN SPACES</option>
									</select>
									<label for="floatingSelect">TYPE OF PROPERTY</label>
								</div>
							</div>
							<div class="row" id="append_data"></div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">

								<?php button('','BACK',NULL,base_url('property'),'btn-lg') ?>

								<a href="<?php echo base_url('property') ?>" class="btn btn-secondary btn-lg"><i class="fas fa-chevron-left"></i> BACK</a>
								<button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> SUBMIT</button>
							</div>
					    </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</div>
<?php echo form_close() ?>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
	<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
</div> -->
