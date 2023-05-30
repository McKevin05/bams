<!-- solo_parent_id -->

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
    <div class="clearfix"></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="located_address" id="floatingInput">
            <label for="floatingInput">Located Address</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
    <i>This certification is being issued upon request of the above subject person as a requirement for Medical assistance from Medical Center Manila Social Services for </i>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="relationship_name" id="floatingInput">
            <label for="floatingInput">Name</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="relationship_age" id="floatingInput">
            <label for="floatingInput">Age</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="relationship" id="floatingInput">
            <label for="floatingInput">Relationship</label>
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