<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('asset') ?>">List of Assets and Properties</a></li>
						    <li class="breadcrumb-item active" aria-current="page"><?php echo $title_page; ?></li>
						  </ol>
						</nav>
					</div>
				</div>
				</div>
			</div>
		</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="fst-italic">ASSET/PROPERTY INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
					    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2" onchange="showDiv('append_data','floatingSelectV')">
								<div class="form-floating">
									<select name="type_of_business" class="form-select" id="floatingSelectV" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="FURNITURE AND FIXTURES">FURNITURE AND FIXTURES</option>
										<option value="VEHICLE">VEHICLE</option>
										<option value="COMPUTERS AND TECHNOLOGY PRODUCTS">COMPUTERS AND TECHNOLOGY PRODUCTS</option>
									</select>
									<label for="floatingSelect">TYPE OF ASSET/PROPERTY</label>
								</div>
							</div>
							<div class="clearfix"></div>
				    	<div class="row" id="append_data"></div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
								<a href="<?php echo base_url('asset/view') ?>" type="submit" class="btn btn-success">SUBMIT</a>
							</div>
					    </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</div>
<script>
let fixture = `<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="item" name="item" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ITEM NAME</label>
		            </div>
		    			</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="serial_no" name="serial_no" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">PROPERTY NUMBER/ SERIAL NUMBER</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="date" class="form-control text-capitalize" id="date_purchase" name="date_purchase" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DATE PURCHASE</label>
		            </div>
				    	</div>
		    			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="mr_to" name="mr_to" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ASSIGNED TO / MR TO</label>
		            </div>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
										<select name="category" class="form-select" id="category" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="ACTIVE">ACTIVE</option>
											<option value="DISPOSED">DISPOSED</option>
										</select>
										<label for="floatingSelect">STATUS</label>
				    		</div>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="date" class="form-control text-capitalize" id="date_purchase" name="date_purchase" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DATE DISPOSED (If STATUS is Disposed)</label>
		            </div>
				    	</div>
				    	`;

let vehicle = `<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
										<select name="category" class="form-select" id="category" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="SEDAN">SEDAN</option>
											<option value="HATCHBACK">HATCHBACK</option>
											<option value="SPORT-UTILITY VEHICLE (SUV)">SPORT-UTILITY VEHICLE (SUV)</option>
											<option value="MINIVAN">MINIVAN</option>
											<option value="PICKUP TRUCK">PICKUP TRUCK</option>
											<option value="STATION WAGON">STATION WAGON</option>
											<option value="BUS">BUS</option>
										</select>
										<label for="floatingSelect">TYPE OF VEHICLE</label>
				    		</div>
		    			</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="plate_no" name="plate_no" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">PLATE NUMBER</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="vehicle_brand" name="vehicle_brand" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">VEHICLE BRAND</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="mr_to" name="mr_to" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ASSIGNED TO / MR TO</label>
		            </div>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
										<select name="category" class="form-select" id="category" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="ACTIVE">ACTIVE</option>
											<option value="DISPOSED">DISPOSED</option>
										</select>
										<label for="floatingSelect">STATUS</label>
				    		</div>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="date" class="form-control text-capitalize" id="date_purchase" name="date_purchase" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DATE DISPOSED (If STATUS is Disposed)</label>
		            </div>
				    	</div>`;

let computer = `<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="item" name="item" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ITEM NAME</label>
		            </div>
		    			</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="serial_no" name="serial_no" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">PROPERTY NUMBER/ SERIAL NUMBER</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="date" class="form-control text-capitalize" id="date_purchase" name="date_purchase" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DATE PURCHASE</label>
		            </div>
				    	</div>
		    			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="mr_to" name="mr_to" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ASSIGNED TO / MR TO</label>
		            </div>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
										<select name="category" class="form-select" id="category" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="ACTIVE">ACTIVE</option>
											<option value="DISPOSED">DISPOSED</option>
										</select>
										<label for="floatingSelect">STATUS</label>
				    		</div>
				    	</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="date" class="form-control text-capitalize" id="date_purchase" name="date_purchase" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DATE DISPOSED (If STATUS is Disposed)</label>
		            </div>
				    	</div>`;

function showDiv(divId,data)
    {
        console.log(divId);
        let floatingSelect = document.getElementById(data).value;
        let appendDiv = document.getElementById(divId);
        console.log( document.getElementById(data).value);
        console.log(floatingSelect);
        if (floatingSelect == 'FURNITURE AND FIXTURES') 
        {
          appendDiv.innerHTML = fixture;
        }
        else if(floatingSelect == 'VEHICLE')
        {
          appendDiv.innerHTML = vehicle;
        }
        else if(floatingSelect == 'COMPUTERS AND TECHNOLOGY PRODUCTS')
        {
          appendDiv.innerHTML = computer;
        }
        else
        {
          appendDiv.innerHTML ="";
        }
    }
</script>