<div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel title-m"><?php echo $action." ".$label ?></h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" id="body-m">
        <div class="row">
            <div class="col-12">
                <span id="sp_error"></span>
            </div>
        </div>

        <form id="frm_masterdata">
            <div class="row">
                <div class="col-12 ">
                    <div class="mb-3">
                      <label for="" class="form-label"><?php echo $label ?></label>
                      <?php echo $form ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn_save_masterdata" data-url="<?php echo $url ?>">Save</button>
        <button type="button" class="btn btn-secondary" id="btn-close" data-bs-dismiss="modal">Close</button>
    </div>
</div>