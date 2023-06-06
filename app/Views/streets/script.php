<script type="text/javascript">
	$(document).on("click","#btnsave_street",function(){

      let form_data = $('#frm_street').serialize()
      let form_url = $('#frm_street').attr('action')
      ajx(form_url,form_data);
  })

  $(document).on('click','#btnsuccess',function(){
    window.location.href ="<?php 	echo base_url('street') ?>"
  })

  $(document).on('click','.btnaction',function(){
    url = $(this).data('url')
    action = $(this).data('action')
    $('#frm_street').attr('action',url);

    if (action == 'edit') 
    {
      street = $(this).data('name')
      $('#add_street').find('h5').html('EDIT STREET');
      $('#add_street').find('input').val(street);
    }
    else if(action == 'delete')
    {

    }

  })
  
  function ajx($url,$data,$type ="POST")
  {
    var myMdSucces = new bootstrap.Modal(document.getElementById('mdlsuccess'), {
      keyboard: false
    })
    // var addModal = new bootstrap.Modal(document.getElementById('add_street'), {
    //   keyboard: false
    // })
    $("#frm_error_msg").html("")
    $.ajax({
      type: $type,
      url: $url,
      data: $data,
      dataType:"json",
      success: function(data) {
        console.log(data)
        if (data.error) 
        {
          console.log(data)
          $("#frm_error_msg").html(data.msg)
        }
        else
        {
          console.log(data)
          $('#add_street').modal().hide();;
          $("#success").html(data.msg)
          myMdSucces.show();
        }
      }
    });
  }
</script>