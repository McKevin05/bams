<script>
	$(document).ready(function(){
		let selectSearch = document.getElementById('searchResident');

		if (selectSearch) 
		{
			selectSearch.addEventListener('change',function(e){

			  	let val = e.target.value
				let residentSearch = document.getElementById('residentSearch');
				let rSearch = document.querySelectorAll('.rSearch');

				[...rSearch].map(e => e.remove())

				inputDesc = "status";

				if(val == "age")
				{
					residentSearch.insertAdjacentHTML('afterend', `<div class="col-12 rSearch">
												    <label class="" for="from">&nbsp;</label>
												    <input type="number" name="from" class="form-control" id="from" placeholder="from">
												  </div>
												<div class="col-12 rSearch">
													<label class="" for="to">&nbsp;</label>
												    <input type="number" name="to" class="form-control" id="to" placeholder="to">
												</div>`);
			  	}
			  	else
			  	{
			  		residentSearch.insertAdjacentHTML('afterend',`<div class="col-12 rSearch">
											    	<label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
												    <input type="text" name="search_text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
											    </div>`);
			  	}
			});
		}

	})
</script>