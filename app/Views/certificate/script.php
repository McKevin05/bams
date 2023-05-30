<script>

$("#selectCert").selectize({
    // delimiter: ",",
    persist: false,
    // maxItems: null,
    create: function (input) {
      return {
        value: input,
        text: input,
      };
    },
    onChange: function(value) {
      if (value) 
        document.getElementById("certForm").removeAttribute("hidden");
      else
        document.getElementById("certForm").setAttribute("hidden");
    }
  });

  $("#selectNames").selectize({
    valueField: 'name',
    labelField: 'name',
    searchField: ['name'],
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

      let age     = document.getElementById("age")
      let civil   = document.getElementById("selectCivilStatus")
      let address = document.getElementById("located_address")
      let id      = document.getElementById("request_certificate_resident_id")

      age.value     = data.age
      civil.value   =data.civil
      address.value =data.address
      id.value      =data.id

      console.log(value)
      console.log(data)
    }

  });

  // $("#selectLocations").selectize({
  //   persist: false,
  // });
  
  // $("#selectCivilStatus").selectize({
  //   persist: false,
  // });
  

  let btnShowCertificate = document.getElementById("cert_show");

  // btnShowCertificate.addEventListener("change",function(){
  //     let url = btnShowCertificate.dataset.url;
  //     let valueCert = document.getElementById("cert_show").value;
      
  //     $.get(url+"/"+valueCert,function(data,status){
  //         console.log(data);
  //         let newData = JSON.parse(data);
  //         let certificateForm = document.getElementById("certificateForm");

  //         certificateForm.innerHTML = newData.html

  //         $("#name").select2({
  //          // ajax: {
  //          //    url: "<?php echo base_url('residents/get_names') ?>",
  //          //    dataType: 'json',
  //          //    data: function (params) {
  //          //      var query = {
  //          //        search: params.term,
  //          //        // type: 'public'
  //          //      }

  //          //      // Query parameters will be ?search=[term]&type=public
  //          //      return query;
  //          //    },
  //          //    processResults: function (data) {
  //          //      // Transforms the top-level key of the response object from 'items' to 'results'
  //          //      return {
  //          //        // console.log(data)
  //          //        results: data.result
  //          //      };

  //          //    }
  //          //  }
  //         })
  //     })
  // });

  const on = (selector, event, handler, element=document) => {
      element.addEventListener(event, (e) => { if(e.target.matches(selector)) handler(e); });
  };
  
  on("#btnSubmitCert",'click',  e => {
      let btnSaveRequestCert = document.getElementById("btnSubmitCert");
      let url = btnSaveRequestCert.dataset.url;
      let form = document.forms.namedItem('save_request_certificate');
      // console.log((form));
      
      ajx(url,new FormData(form));
  },document);

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
          // $('#sp_error').html(data.msg);
        }
        else
        {
          console.log(data)
            // $('#add_title').modal('hide');
            // $('#modal_delete').modal('hide');
            // returnData(data.url,data.request_cert_id);

          window.location =data.redirect;
        }
      }
    });
  }

    
    // function returnData(url,request_cert_id) {
        
    //     $.get(url+"/"+StudNo,function(data,status){
    //         // console.log(data);
    //         let newData = JSON.parse(data);
    //         let tor_body = document.getElementById("tor_body");

    //         tor_body.innerHTML = newData.html
    //     })
    // }
</script>