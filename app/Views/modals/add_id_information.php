<!-- Modal -->
<div class="modal fade" id="add_id_information" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD IDENTIFICATION INFORMATION</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <form class="row row-cols-lg-auto g-3 align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label class="" for="inlineFormSelectPref" id="lblIdType">ID CARD TYPE:</label>
								  <?php echo form_dropdown('card_resident_info_id',$id_type,NULL,'class="form-select" id="idType" aria-label="Floating label select example"') ?>
                </div>     
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label class="" for="inlineFormInputGroupUsername" id="lblIdNum">ID NUMBER</label>
                  <input type="text" class="form-control" id="idNum" placeholder="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" id="btnAddId"><i class="fas fa-plus"></i> Add</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>