<!-- aerial_installation -->
<div class="row">
    <input type="hidden" name="request_certificates_cert_id" value="<?php echo $cert_id?>">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="company_name" id="floatingInput">
            <label for="floatingInput">Company Name</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="located_address" id="floatingInput">
            <label for="floatingInput">Located Address</label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="barangay_address" id="floatingInput">
            <label for="floatingInput">Barangay Address</label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="purpose" id="floatingInput">
            <label for="floatingInput">Purpose</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date_from" id="floatingInput">
            <label for="floatingInput">Date From</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date_to" id="floatingInput">
            <label for="floatingInput">Date To</label>
        </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="ornum" id="floatingInput">
            <label for="floatingInput">O.R. No</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="amount" id="floatingInput">
            <label for="floatingInput">Amount</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date_applied" id="floatingInput">
            <label for="floatingInput">Date Applied</label>
        </div>
    </div>
    
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
    <button type="button" class="btn btn-success btn-lg" data-url="<?php echo base_url('certificate/saveCert')?>" id="btnSubmitCert">SUBMIT</button>
</div>