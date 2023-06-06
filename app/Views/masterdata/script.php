<script type="text/javascript">
	$('.btn_masterdata').click(function(){
		url = $(this).data('url');
		console.log(url)
		$.get(url, function(data, status){
		    data = JSON.parse(data);
		    $('#md_masterdata_body').html(data.html)
		});
	})	

	$(document).on('click','#btn_save_masterdata',function(e){
		// console.log(1)
		let form_data = $('#frm_masterdata')[0]
		let form_url = $(this).data('url')
		ajx(form_url,new FormData(form_data));
	})

	$(document).on('click','.btn_delete_masterdata',function(e){
		let id = $(this).data('id');
		let name = $(this).data('name');
		let label = $(this).data('label');

		$('#delete_name').html(`<input type='hidden' name='id' value='${id}'>Your about to Delete this ${label} (${name})`)

	})

	

	function ajx($url,$data,$type ="POST")
	{
	  $.ajax({
	    type: $type,
	    url: $url,
	    data: $data,
	    dataType:"json",
	    processData: false,
	    contentType: false,
	    success: function(data) {
	      if (data.error) 
	      {
	        $('#sp_error').html(data.msg);
	      }
	      else
	      {
	        console.log(data)
	        location.reload();
	      }
	    }
	  });
	}
</script>