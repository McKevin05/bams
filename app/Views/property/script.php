<script>
let house = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="box-title"><i class="fas fa-edit"></i> HOUSE</h6>
						<hr class="hr-box-title">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_residency',["" => "CHOOSE...","RESIDENT" => "RESIDENT","NOT RESIDENT" => "NOT RESIDENT"],set_value('property_residency',NULL),'class="form-select" id="property_residency" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">RESIDENT/NOT RESIDENT</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2" id="nameOfOwner">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_owner" name="property_owner" placeholder="" value="" autocomplete="off">
							<label for="floatingInputValue">NAME OF OWNER</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_house_no" name="property_address_house_no" placeholder="" value="" autocomplete="off">
						<label for="floatingInputValue">HOUSE NO.</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_address_street',$street,NULL,'class="form-select" id="property_address_street" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">STREET</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_barangay" name="property_address_barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
						<label for="floatingInputValue">BARANGAY</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_address_city" name="property_address_city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
							<label for="floatingInputValue">CITY</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
			              <input type="text" class="form-control text-capitalize" id="property_proof_of_ownership" name="property_proof_of_ownership" placeholder="" value="" autocomplete="off">
			              <label for="floatingInputValue">TCT NO. / PROOF-OF-OWNERSHIP</label>
			            </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
							<select name="property_type" class="form-select" id="property_type" aria-label="Floating label select example">
								<option value="" selected="selected">CHOOSE...</option>
								<option value="RESIDENTIAL">RESIDENTIAL</option>
								<option value="COMMERCIAL">COMMERCIAL</option>
								<option value="MIX-USED">MIX-USED</option>
							</select>
							<label for="floatingSelect">TYPE</label>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
			              <input type="number" class="form-control text-capitalize" id="property_floors" name="property_floors" placeholder="" value="" autocomplete="off">
			              <label for="floatingInputValue">NO. OF FLOORS/STOREY</label>
			            </div>
					</div>
				</div>
			</div>`;

let apartment = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h6 class="box-title"><i class="fas fa-edit"></i> APARTMENT</h6>
							<hr class="hr-box-title">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_residency',["" => "CHOOSE...","RESIDENT" => "RESIDENT","NOT RESIDENT" => "NOT RESIDENT"],set_value('property_residency',NULL),'class="form-select" id="property_residency" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">RESIDENT/NOT RESIDENT</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2" id="nameOfOwner">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_owner" name="property_owner" placeholder="" value="" autocomplete="off">
							<label for="floatingInputValue">NAME OF OWNER</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_house_no" name="property_address_house_no" placeholder="" value="" autocomplete="off">
						<label for="floatingInputValue">HOUSE NO.</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_address_street',$street,NULL,'class="form-select" id="property_address_street" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">STREET</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_barangay" name="property_address_barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
						<label for="floatingInputValue">BARANGAY</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_address_city" name="property_address_city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
							<label for="floatingInputValue">CITY</label>
						</div>
					</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="property_proof_of_ownership" name="property_proof_of_ownership" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">TCT NO. / PROOF-OF-OWNERSHIP</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
								<select name="property_type" class="form-select" id="type" aria-label="Floating label select example">
									<option value="" selected="selected">CHOOSE...</option>
									<option value="RESIDENTIAL">RESIDENTIAL</option>
									<option value="COMMERCIAL">COMMERCIAL</option>
									<option value="MIX-USED">MIX-USED</option>
								</select>
								<label for="floatingSelect">TYPE</label>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="property_floors" name="property_floors" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF FLOORS/STOREY</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="property_units" name="property_units" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF UNITS</label>
				            </div>
						</div>
					</div>
				</div>`;

let building = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h6 class="box-title"><i class="fas fa-edit"></i> CONDOMINIUM/BUILDING</h6>
							<hr class="hr-box-title">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_residency',["" => "CHOOSE...","RESIDENT" => "RESIDENT","NOT RESIDENT" => "NOT RESIDENT"],set_value('property_residency',NULL),'class="form-select" id="property_residency" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">RESIDENT/NOT RESIDENT</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2" id="nameOfOwner">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_owner" name="property_owner" placeholder="" value="" autocomplete="off">
							<label for="floatingInputValue">NAME OF OWNER</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_house_no" name="property_address_house_no" placeholder="" value="" autocomplete="off">
						<label for="floatingInputValue">HOUSE NO.</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_address_street',$street,NULL,'class="form-select" id="property_address_street" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">STREET</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_barangay" name="property_address_barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
						<label for="floatingInputValue">BARANGAY</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_address_city" name="property_address_city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
							<label for="floatingInputValue">CITY</label>
						</div>
					</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
								<select name="property_type" class="form-select" id="type" aria-label="Floating label select example">
									<option value="" selected="selected">CHOOSE...</option>
									<option value="RESIDENTIAL">RESIDENTIAL</option>
									<option value="COMMERCIAL">COMMERCIAL</option>
									<option value="MIX-USED">MIX-USED</option>
								</select>
								<label for="floatingSelect">TYPE</label>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="property_floors" name="property_floors" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF FLOORS/STOREY</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="property_units" name="property_units" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF UNITS</label>
				            </div>
						</div>
					</div>
				</div>`;

let vacant = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h6 class="box-title"><i class="fas fa-edit"></i> VACANT LOTS/ OPEN SPACES</h6>
							<hr class="hr-box-title">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_residency',["" => "CHOOSE...","RESIDENT" => "RESIDENT","NOT RESIDENT" => "NOT RESIDENT"],set_value('property_residency',NULL),'class="form-select" id="property_residency" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">RESIDENT/NOT RESIDENT</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2" id="nameOfOwner">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_owner" name="property_owner" placeholder="" value="" autocomplete="off">
							<label for="floatingInputValue">NAME OF OWNER</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_house_no" name="property_address_house_no" placeholder="" value="" autocomplete="off">
						<label for="floatingInputValue">HOUSE NO.</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<?php echo form_dropdown('property_address_street',$street,NULL,'class="form-select" id="property_address_street" aria-label="Floating label select example"') ?>
							<label for="floatingSelect">STREET</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
						<input type="text" class="form-control text-uppercase" id="property_address_barangay" name="property_address_barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" readonly>
						<label for="floatingInputValue">BARANGAY</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
							<input type="text" class="form-control text-uppercase" id="property_address_city" name="property_address_city" placeholder="" value="MAKATI CITY" autocomplete="off" readonly>
							<label for="floatingInputValue">CITY</label>
						</div>
					</div>
					</div>
				</div>`;

function showDiv(divId,data)
{
    console.log(divId);

    let floatingSelect = document.getElementById(data).value;
    let appendDiv = document.getElementById(divId);
    console.log( document.getElementById(data).value);
    console.log(floatingSelect);
   
    if (floatingSelect == 'HOUSE') 
    {
      appendDiv.innerHTML = house;
    }
    else if(floatingSelect == 'APARTMENT')
    {
      appendDiv.innerHTML = apartment;
    }
    else if(floatingSelect == 'CONDOMINIUM/BUILDING')
    {
      appendDiv.innerHTML = building;
    }
    else if(floatingSelect == 'VACANT LOTS/ OPEN SPACES')
    {
      appendDiv.innerHTML = vacant;
    }
    else
    {
      appendDiv.innerHTML ="";
    }

    let propertyResidency = document.getElementById('property_residency');

		if(propertyResidency)
		{
			propertyResidency.addEventListener("change",(e)=>{
				let val  = e.target.value;

				let nameOfOwner = document.getElementById('nameOfOwner');

				if(val == 'NOT RESIDENT')
				{
					nameOfOwner.innerHTML = `<div class="form-floating">
												<input type="text" class="form-control text-uppercase" id="property_owner" name="property_owner" placeholder="" value="" autocomplete="off">
												<label for="floatingInputValue">NAME OF OWNER</label>
											</div>`
				}
				else
				{
					nameOfOwner.innerHTML = `<label for="">NAME OF OWNER</label><select type="text" class="form-select text-uppercase" id="property_owner" name="property_owner" placeholder="" value="" autocomplete="off"></select><input type="hidden" name="property_resident_info_id" id="property_resident_info_id">`

					$("#property_owner").selectize({
					    valueField: 'name',
					    labelField: 'name',
					    searchField: ['name'],
					    options: [],
					    // create: false,
					    load: function(query, callback) {
					      this.clearOptions();
					      $.ajax({
					            url: "<?php echo base_url('residents/get_names') ?>",
					            data: { 'search': query },
					            type: 'GET',
					            dataType: 'json',
					            error: function() {
					              callback();
					            },
					            success: function(res) {
					              callback([res]);
					            }
					        });
					    },
					    onChange: function(value) {
					      let data = this.options[value]; 

					      let id     = document.getElementById("property_resident_info_id")

					      id.value     = data.id
					    }
					});
				}
			})
		}

    // $("#property_owner").select2({
    // 	 ajax: {
		// 	    url: "<?php echo base_url('residents/get_names') ?>",
		// 	    dataType: 'json',
		// 	    data: function (params) {
		// 	      var query = {
		// 	        search: params.term,
		// 	        // type: 'public'
		// 	      }

		// 	      // Query parameters will be ?search=[term]&type=public
		// 	      return query;
		// 	    },
		// 		  processResults: function (data) {
		// 	      // Transforms the top-level key of the response object from 'items' to 'results'
		// 	      return {
		// 	      	// console.log(data)
		// 	        results: data.result
		// 	      };

		// 	    }
		// 	  }
    // })
}
</script>