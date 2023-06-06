<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 my-5">
	<p class="mb-3">To Whom It May Concern:</p>
	<p class="text-indent body-cert mb-3">
        This is to certify that, <b><?php echo $name; ?></b> ,<?php echo $age; ?> years old, <?php echo $civil_status; ?>, 
        with given address located at <?php echo $located_address; ?> is a resident of this Barangay.
	</p>
    <p class="text-indent body-cert mb-3">
    This certification is being issued upon request of the above subject person as a requirement for <b><?php echo $ceritficate_type?> purposes.</b>
    </p>
    <p class="text-indent body-cert mb-3">
        Issued this <?php echo date('j',strtotime($issued)); ?><sup><?php echo date('S',strtotime($issued)); ?></sup> day of <?php echo date('F',strtotime($issued)); ?>, <?php echo date('Y',strtotime($issued)); ?> at Barangay Pio del Pilar, City of Makati.
    </p>
    
</div>
