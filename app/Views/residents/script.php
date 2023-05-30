<script type="text/javascript">

$(document).ready(function(){
  // console.log(1)
	$(document).on('change','#resident_img',function(e){

    let residentIdPic = document.querySelector('#resident_id_pic');

    residentIdPic.innerHTML = `<img src="<?php echo base_url().'/assets/images/profile.png' ?>" class="img-rounded"  alt="Upload Picture" id="id_view">`;

    let useCamera = document.querySelector("#use_camera");

    useCamera.innerHTML = "Use Camera";

		let image = document.getElementById('id_view');
		image.src = URL.createObjectURL(e.target.files[0]);
	})


  let status     = document.getElementById('status');
  let profession = document.getElementById('profession');
  let closeOther = document.getElementById('btnclose_others');
  let saveOther  = document.getElementById('btnsave_others');
  let civilStatus= document.getElementById('civil_status');
  let ifMarried  = document.getElementById('ifMarried');

  let inputDesc  = "";

  if (status) 
  {
    status.addEventListener('change',function(e){
      let val = e.target.value

      inputDesc = "status";

      if(val == "OTHERS")
      {
        $('#add_others').modal('show');
      }
    });
  }

  if (profession) 
  {
    profession.addEventListener('change',function(e){
      let val = e.target.value

      inputDesc = "profession";
      
      if(val == "OTHERS")
      {
        $('#add_others').modal('show');
      }

    });
  }

  if (closeOther) 
  {
    closeOther.addEventListener('click',function(e){
      document.getElementById(inputDesc).value = "";
    });
  }

  if (saveOther) 
  {
    saveOther.addEventListener('click',function(e){
      let select = document.getElementById(inputDesc);
      let option = document.createElement("option");
      let other  = document.getElementById("other_name");

      option.value = other.value.toUpperCase();
      console.log(option.value);
      option.text = other.value.toUpperCase();
      select.add(option);

      select.value = other.value.toUpperCase();

      $('#add_others').modal('hide');
      other.value = "";

    });
  }

  if (civilStatus) 
  {
    civilStatus.addEventListener('change',function(e){
      let val = e.target.value

      let spouse   = document.getElementById('spouse_name');

      console.log(val)
      
      if(val == 2)
      {
        spouse.removeAttribute('disabled');
        ifMarried.checked = true
      }
      else
      {
        spouse.setAttribute('disabled','disabled');
      }

    });
  }

  if (ifMarried) 
  {
    ifMarried.addEventListener('click',function(e){
      let val = e.target.checked

      let spouse   = document.getElementById('spouse_name');

      console.log(val)
      
      if(val)
      {
        spouse.removeAttribute('disabled');
        ifMarried.checked = true
      }
      else
      {
        spouse.setAttribute('disabled','disabled');
      }

    });
  }

	// $(document).on("click","#btnsave_resident",function(e){

	//   e.preventDefault();
  //     let form_data = $('#frm_resident')[0]
  //     let form_url = $('#frm_resident').attr('action')
  //     ajx(form_url,new FormData(form_data));
	// })

  let genderStat = document.getElementById('genderStat')

  if (genderStat) 
  {
    let maleStat   = genderStat.dataset.male
    let femaleStat = genderStat.dataset.female
    document.getElementById('genderMale').innerHTML= `MALE: ${maleStat}`
    document.getElementById('genderFemale').innerHTML= `FEMALE: ${femaleStat}`
  }

  let useCamera = document.querySelector("#use_camera");

  if (useCamera) 
  {
    let residentIdPic = document.querySelector('#resident_id_pic');
    let imageUpload   = document.querySelector('#resident_img');
    
    // imageUpload.target.value  = "";

    useCamera.addEventListener('click', async function(e) {

      imageUpload.value = ""

      let camera;
      let text = e.target.innerHTML

      if (text == "Use Camera") 
      {
        residentIdPic.innerHTML = `<video id="camera" width="200" height="200" autoplay></video>`;

        camera = document.querySelector("#camera");

        let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
           
        camera.srcObject = stream;

        e.target.innerHTML = "Capture"
      }

      if (text == "Capture") 
      {
        camera = document.querySelector("#camera");
        imageUpload   = document.querySelector('#resident_img');


        residentIdPic.innerHTML = `<canvas id="canva" width="200" height="200"></canvas>`;

        let canva = document.querySelector("#canva");
        // console.log(camera)
        await canva.getContext('2d').drawImage(camera, 0, 0, canva.width, canva.height);
        let image_data_url =  canva.toDataURL('image/jpeg');
            console.log(image_data_url);
        canva.toBlob( (blob) => {
          const file = new File( [ blob ], "pic.png" );
          const dT = new DataTransfer();
          dT.items.add( file );
          imageUpload.files = dT.files;
        });

        e.target.innerHTML = "Use Camera"
      }

    })

  }

  let btnAddId = document.getElementById('btnAddId');

  if (btnAddId) 
  {
    btnAddId.addEventListener('click',addId);
  }

  let btnAddChild = document.getElementById('btnAddChild');

  if (btnAddChild) 
  {
    btnAddChild.addEventListener('click',addChild);
  }
});

function addId()
{
  //input value
  let idType = document.querySelector('#idType');
  let idNum  = document.querySelector('#idNum');

  let lblidType = document.querySelector('#lblIdType');
  let lblidNum  = document.querySelector('#lblIdNum');

  if (idType.value && idNum.value) 
  {
    //tabble
    let appendId = document.querySelector('#tblId');

    let trLength= appendId.rows.length - 1;

    const row   = document.createElement("tr");
    //cell creation
    const cell1 = document.createElement("td");
    const cell2 = document.createElement("td");
    const cell3 = document.createElement("td");


    cell1.innerHTML = `<button class="btn btn-danger"><i class="fas fa-times"></i></button>`;
    cell2.innerHTML = `${idType.options[idType.selectedIndex].text} <input name="id[${trLength}][card_type]" type="hidden" value="${idType.value}">`;
    cell3.innerHTML = `${idNum.value} <input name="id[${trLength}][card_number]" type="hidden" value="${idNum.value}">`;

    row.appendChild(cell1);
    row.appendChild(cell2);
    row.appendChild(cell3);

    appendId.appendChild(row);

    lblidType.innerHTML = idType.value ?`ID CARD TYPE`:`ID CARD TYPE <b class="text-danger">is Required</b>`;
    lblidNum.innerHTML  = idNum.value ?`ID NUMBER` :`ID NUMBER <b class="text-danger">is Required</b>`;

    $('#add_id_information').modal('hide');
    idType.value = "";
    idNum.value  = ""
  }
  else
  {
    lblidType.innerHTML = idType.value ?`ID CARD TYPE`:`ID CARD TYPE <b class="text-danger">is Required</b>`;
    lblidNum.innerHTML  = idNum.value ?`ID NUMBER` :`ID NUMBER <b class="text-danger">is Required</b>`;
  }

}


function addChild()
{
  //input value
  let childName = document.querySelector('#childName');
  let childBDate  = document.querySelector('#childBDate');

  let lblchildName = document.querySelector('#lblchildName');
  let lblchildBDate  = document.querySelector('#lblchildBDate');

  if (childName.value && childBDate.value) 
  {
    //tabble
    let appendId = document.querySelector('#tblChild');

    let trLength= appendId.rows.length - 1;

    const row   = document.createElement("tr");
    //cell creation
    const cell1 = document.createElement("td");
    const cell2 = document.createElement("td");
    const cell3 = document.createElement("td");


    cell1.innerHTML = `<button class="btn btn-danger"><i class="fas fa-times"></i></button>`;
    cell2.innerHTML = `${childName.value} <input name="child[${trLength}][dependencies_name]" type="hidden" value="${childName.value}">`;
    cell3.innerHTML = `${childBDate.value} <input name="child[${trLength}][dependencies_bdate]" type="hidden" value="${childBDate.value}">`;

    row.appendChild(cell1);
    row.appendChild(cell2);
    row.appendChild(cell3);

    appendId.appendChild(row);

    lblchildName.innerHTML = childName.value ?`NAME OF CHILD`:`NAME OF CHILD <b class="text-danger">is Required</b>`;
    lblchildBDate.innerHTML  = childBDate.value ?`BIRTH DATE` :`BIRTH DATE <b class="text-danger">is Required</b>`;

    $('#add_child').modal('hide');
    childName.value = "";
    childBDate.value  = "";
  }
  else
  {
    lblchildName.innerHTML = childName.value ?`NAME OF CHILD`:`NAME OF CHILD <b class="text-danger">is Required</b>`;
    lblchildBDate.innerHTML  = childBDate.value ?`BIRTH DATE` :`BIRTH DATE <b class="text-danger">is Required</b>`;
  }

}



function ajx($url,$data,$type ="POST")
{
  var myMdSucces = new bootstrap.Modal(document.getElementById('mdlsuccess'), {
    keyboard: false
  })
  
  $("#frm_error_msg").html("")
  $.ajax({
    type: $type,
    url: $url,
    data: $data,
    dataType:"json",
    processData: false,
    contentType: false,
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
        $("#success").html(data.msg)
        myMdSucces.show();
      }
    }
  });
}

</script>