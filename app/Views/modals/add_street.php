<!-- Modal -->
<?php echo form_open(NULL,"id='frm_street'") ?>
<div class="modal fade" id="add_street" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD STREET</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="frm_error_msg">  </div>
            <div class="form-floating">
              <input type="text" class="form-control text-capitalize" id="street_name" name="street_name" placeholder="" value="" autocomplete="off">
              <label for="floatingInputValue">STREET NAME</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary btn-sm" id="btnsave_street"><i class="fas fa-save"></i> Save</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close() ?>