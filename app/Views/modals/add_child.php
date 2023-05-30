<!-- Modal -->
<div class="modal fade" id="add_child" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD CHILD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
            <label class="" for="" id="lblchildName">NAME OF CHILD</label>
            <input type="text" class="form-control text-uppercase" id="childName" placeholder="">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <label class="" for="" id="lblchildBDate">BIRTH DATE</label>
            <input type="date" class="form-control" id="childBDate" placeholder="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnAddChild"><i class="fas fa-plus"></i> Add</button>
      </div>
    </div>
  </div>
</div>