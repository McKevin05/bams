<div class="row mt-5 me-5">
	<!-- <div class="col-12 text-end">
		BC. No.  Etc-<?php //echo $bc_no_ect ?> 
	</div> -->
</div>
<h2 class="mt-2 mb-5 text-center ls-2"><b><?php echo $cert_title; ?></b></h2>

<p class="mb-3">To Whom It May Concern:</p>
<p class="text-indent">This is to certify that, <b><?php echo $name;?></b>, with given address located at <?php echo $address;?> has been given this Clearance/Certification for <?php echo $porpose;?>.</p>
<p></p>
<p class="text-indent">This certification is issued to the Subject Company/Owner as a requirement for securing for <b>Building Clearance</b>.</p>
<p></p>
<p class="text-indent">Provided that <b>CLEALINESS AND PEACE & ORDER</b> and all the disturbed/destroyed structure including the pavement and other appurtenances have been restored and cleaned at the expense of the said applicant.</p>
<p></p>
<p class="text-indent">Done this <?php echo date('jS');?> day of <?php echo date('F');?>, <?php echo date('Y');?> at Barangay Pio del Pilar, City of Makati.</p>
<div class="row">
	<div class="col-4">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th>OR No.:</th>
					<td><?php echo $ornum; ?></td>
				</tr>
				<tr>
					<th>Amount:</th>
					<td>Php <?php echo $amount; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row mt-5 mb-4">
	 <div class="col-8">
	 </div>
	 <div class="col-4">
	 	Certified Correct:
    </div>
</div>
<div class="row">
	 <div class="col-8">
	 </div>
	 <div class="col-4">
	 	<u><b><?php echo $captain ?></b></u> <br>
		Barangay Captain
    </div>
</div>
<div class="row">
	<div class="col-1">etc</div>
</div>