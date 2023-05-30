<!-- business_clearance_penalties -->
<div class="row">
    <input type="hidden" name="request_certificates_cert_id" value="<?php echo $cert_id?>">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <select type="text" class="form-control" name="name" id="name"></select>
            <label for="name">Name</label>
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
            <input type="text" class="form-control" name="business_type" id="floatingInput">
            <label for="floatingInput">Business Type</label>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Open this select menu</option>
                <option value="1">New</option>
                <option value="2">Renewal</option>
                <option value="3">Other</option>
            </select>
            <label for="floatingSelect">Status</label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="ornum" id="floatingInput">
            <label for="floatingInput">O.R. No</label>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="amount" id="floatingInput">
            <label for="floatingInput">Amount</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="issued" id="floatingInput">
            <label for="floatingInput">Issued</label>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" name="remarks" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingInput">Remarks</label>
        </div>
    </div>
    
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
    <button type="button" class="btn btn-success btn-lg" data-url="<?php echo base_url('certificate/saveCert')?>" id="btnSubmitCert">SUBMIT</button>
</div>