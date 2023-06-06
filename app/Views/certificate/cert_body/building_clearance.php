<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 my-5">
	<p>To Whom It May Concern:</p>
	<p class="text-indent body-cert">
			This is to certify that, <?php echo $name; ?>, with given address located at <?php echo $located_address;?>, of this Barangay,
			City of Makati has been given this Clearance/Certification for Construction of <b><?php echo $purpose;?></b>.
	</p>
	<p class="text-indent body-cert mt-3">
		This certification is issued to the Subject Company/Owner as a requirement for securing for <b>Building Clearance</b>.
	</p>
	<p class="text-indent body-cert mt-3">
		Provided that <b>CLEANLINESS AND PEACE & ORDER</b> and all the disturbed/destroyed structure including the pavement and other appurtenances have been restored and cleaned at the expense of the said applicant.
	</p>
	<p class="text-indent body-cert mt-3">
		Done this <?php echo date('j',strtotime($issued)); ?><sup><?php echo date('S',strtotime($issued)); ?></sup> day of <?php echo date('F',strtotime($issued)); ?>, <?php echo date('Y',strtotime($issued)); ?> at Barangay Pio del Pilar, City of Makati.
	</p>
</div>
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
