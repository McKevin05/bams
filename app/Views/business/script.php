<script>
let small = `<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2">
				<div class="form-floating">
					<input type="text" class="form-control text-capitalize" id="business_name" name="business_name" placeholder="" value="" autocomplete="off">
					<label for="floatingInputValue">BUSINESS NAME</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
				<div class="form-floating">
					<select name="business_category" class="form-select" id="business_category" aria-label="Floating label select example">
						<option value="" selected="selected">CHOOSE...</option>
						<option value="SARI-SARI STORE">SARI-SARI STORE</option>
						<option value="KARINDERYA">KARINDERYA</option>
						<option value="VULCANIZING SHOP">VULCANIZING SHOP</option>
						<option value="RENTAL HOUSE/ROOM">RENTAL HOUSE/ROOM</option>
					</select>
					<label for="floatingSelect">BUSINESS CATEGORY</label>
				</div>
			</div>
					
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
				<div class="form-floating">
					<select type="text" class="form-select text-capitalize" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off"></select>
					<label for="floatingInputValue">BUSINESS OWNER</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
				<div class="form-floating">
					<input type="text" class="form-control text-capitalize" id="business_address" name="business_address" placeholder="" value="" autocomplete="off">
					<label for="floatingInputValue">ADDRESS</label>
				</div>
			</div>`;

let msme = `<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="business_name" name="business_name" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">BUSINESS NAME</label>
		            </div>
		    			</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="business_dti_no" name="business_dti_no" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DTI NO.</label>
		            </div>
				    	</div>
							
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
								<div class="form-floating">
		              <select type="text" class="form-select text-capitalize" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off"></select>
		              <label for="floatingInputValue">BUSINESS OWNER</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="business_address" name="business_address" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ADDRESS</label>
		            </div>
				    	</div>`;

function showDiv(divId,data)
{
    console.log(divId);
    let floatingSelect = document.getElementById(data).value;
    let appendDiv = document.getElementById(divId);
    console.log( document.getElementById(data).value);
    console.log(floatingSelect);
    if (floatingSelect == 'SMALL BUSINESS') 
    {
      appendDiv.innerHTML = small;
    }
    else if(floatingSelect == 'MICRO, SMALL & MEDIUM ENTERPRISES')
    {
      appendDiv.innerHTML = msme;
    }
    else
    {
      appendDiv.innerHTML ="";
    }

    $("#business_owner").select2({
    	 ajax: {
			    url: "<?php echo base_url('residents/get_names') ?>",
			    dataType: 'json',
			    data: function (params) {
			      var query = {
			        search: params.term,
			        // type: 'public'
			      }

			      // Query parameters will be ?search=[term]&type=public
			      return query;
			    },
				  processResults: function (data) {
			      // Transforms the top-level key of the response object from 'items' to 'results'
			      return {
			      	// console.log(data)
			        results: data.result
			      };

			    }
			  }
    })
}


let tx = document.getElementById('btnApprovedTax')

if(tx)
{
	tx.addEventListener("click",(e)=>{
		let id  = document.getElementById('tax_id');
		let bid = document.querySelector('[name="business_other_business_id"]');

		bid.value = e.target.dataset.bid

		console.log(e.target)
		if(e.target.dataset.id)
			id.innerHTML = `<input type="hidde" name="business_other_details_id" value=${e.target.dataset.id}>`
		else
			id.innerHTML = ``
	})
}

let businessResidency = document.getElementById('business_residency');

if(businessResidency)
{
	businessResidency.addEventListener("change",(e)=>{
		let val  = e.target.value;

		let nameOfOwner = document.getElementById('nameOfOwner');

		if(val == 'NOT RESIDENT')
		{
			nameOfOwner.innerHTML = `<div class="form-floating">
										<input type="text" class="form-control text-uppercase" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off">
										<label for="floatingInputValue">NAME OF OWNER</label>
									</div>`
		}
		else
		{
			nameOfOwner.innerHTML = `<label for="">NAME OF OWNER</label><select type="text" class="form-select text-uppercase" id="business_owner" name="business_owner" placeholder="" value="" autocomplete="off"></select><input type="hidden" name="business_resident_info_id" id="business_resident_info_id">`

			$("#business_owner").selectize({
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

			      let id     = document.getElementById("business_resident_info_id")

			      id.value     = data.id
			    }
			});
		}
	})
}

$(document).on('click','.printClearance',(e)=>{
		let url  = e.target.dataset.url
		// console.log(dataSets);
		$.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        error: function() {
        },
        success: function(res) {
        	let body = document.getElementById('print');

        	if (body) {body.innerHTML = res.html}
        	window.print()
        }
    })
 })

	
</script>