<style>
	.cert-box
	{
		border:1px solid;
		display: inline;
		padding: 5px 15px;
		float:left;
	}
</style>
<p class="mb-3">To Whom It May Concern:</p>
<p class="text-indent">This is to certify that, <b class="text-uppercase"><?php echo $name;?></b>, located at <span class="text-uppercase"><?php echo $address;?></span> with <b class="text-uppercase"><?php echo $purpose;?></b> as kind of business is hereby granted permit to operate its business from the city government.</p>
<p></p>
<p class="text-indent">This certification is being issued as mandated by Paragraph C of Section 152. Article IV of Republic Act 7160, otherwise known as the 1991 Local Government Code, for the purpose of securing business permit/license from the City of Makati for the year <b><u><?php echo date('Y') ?></u></b>.</p>

<div class="row">
<div class="col-4">
		<table class="table table-borderless">
			<tbody>
				<tr>
					<td width="60%" class="p-25">New</td>
					<td><div class="cert-box"><b>&nbsp;</b></div></td>
				</tr>
				<tr>
					<td class="p-25">Renewal</td>
					<td><div class="cert-box"><b>&nbsp;</b></div></td>
				</tr>
				<tr>
					<td class="p-25">Others</td>
					<td><div class="cert-box"><b>&nbsp;</b></div></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-8">
		<table class="table table-borderless">
			<tbody>
				<tr>
					<td width="60%">
						Brgy. Clearance - <br>
						OR# MKTCF 4567891 <br>
						Date: January 31, 2023
					</td>
					<td class="text-right">200.00</td>
				</tr>
				<tr>
					<td width="80%">
						Business Clearance Adjustment- <br>
					</td>
					<td class="text-right">300.00</td>
				</tr>
				<tr>
					<td width="80%">
						Business Sticker - <br>
						OR# MKT 6567891 <br>
						Date: April 11, 2023
					</td>
					<td class="text-right">200.00</td>
				</tr>
				<tr>
					<td width="80%">
						Total Amount:
					</td>
					<td class="text-right">700.00</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p>Issued this <?php echo date('jS');?> day of <?php echo date('F');?>, <?php echo date('Y');?></p>
	<p><b>Remarks : <?php echo $remarks?></b></p>
</div>
