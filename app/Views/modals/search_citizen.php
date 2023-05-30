
<!-- Modal -->
<div class="modal fade" id="search_citizen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">SEARCH RESIDENT</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="row row-cols-lg-auto g-3 align-items-center">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label class="" for="inlineFormSelectPref">Search By:</label>
                <select class="form-select" id="inlineFormSelectPref">
                  <option selected>Choose...</option>
                  <option value="1">Last Name</option>
                  <option value="2">First Name</option>
                  <option value="2">Street</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 d-grid gap-2">
                <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
              </div>
            </form>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <tbody>
                  <tr>
                    <td><b>#</b></td>
                    <td><b>LAST NAME</b></td>
                    <td><b>FIRST NAME</b></td>
                    <td><b>MIDDLE NAME</b></td>
                    <td><b>ADDRESS</b></td>
                    <td><b>ACTION</b></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Diaz</td>
                    <td>Mc Jayvee</td>
                    <td>Ortiz</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                    <td><button type="submit" class="btn btn-sm btn-primary mt-3"><i class="fas fa-hand-pointer"></i> Add</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>