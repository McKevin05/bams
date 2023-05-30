<!-- annulment_purposes -->

<div class="row">
    <input type="hidden" name="request_certificates_cert_id" value="<?php echo $cert_id?>">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <select type="text" class="form-control" name="name" id="name"></select>
            <label for="name">Name</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="age" id="floatingInput">
            <label for="floatingInput">Age</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        
        <div class="form-floating mb-3">
            <?php echo form_dropdown('civil_status', $civil_status, 'NULL','class="form-select"');?>
            <label for="floatingSelect">Civil Status</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="length_of_stay" id="floatingInput">
            <label for="floatingInput">Length of Stay</label>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="located_address" id="floatingInput">
            <label for="floatingInput">Located Address</label>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="issued" id="floatingInput">
            <label for="floatingInput">Issued</label>
        </div>
    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
    <button type="button" class="btn btn-success btn-lg" data-url="<?php echo base_url('certificate/saveCert')?>" id="btnSubmitCert">SUBMIT</button>
</div>