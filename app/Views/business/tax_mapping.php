<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h3 class="sub-title">List of Business</h3>
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php // echo $title_page; ?></h5>
						<hr>
					</div> -->
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('business/add') ?>" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i> Add New Business</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Type of Business</option>
						      <option value="2">Line of Business</option>
						      <option value="2">Business Name</option>
						      <option value="3">Business Owner/s</option>
						    </select>
						  </div>
						  <div class="col-12">
						    <label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
						      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
						  </div>
						  <div class="col-12">
						    <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
						  </div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-3">
						<div class="row">
							<div class='col-auto h6 d-inline-flex mb-1 px-3 py-2 fw-semibold text-success border border-success rounded-2 me-2 text-center'>
								<div class="d-flex flex-column">
									<span class="text-dark h6 m-0 p-0">Active</span>
									<hr class="text-dark m-0 p-0"> 
									<span class="h1 m-0 p-2" id="dataA">0</span>  
								</div>
							</div>
							<div class='col-auto h6 d-inline-flex mb-1 px-3 py-2 fw-semibold text-warning border border-warning rounded-2 me-2 text-center'>
								<div class="d-flex flex-column">
									<span class="text-dark h6 m-0 p-0">Expire's less than 30days</span>
									<hr class="text-dark m-0 p-0"> 
									<span class="h1 m-0 p-2" id="dataW">0</span>  
								</div>
							</div>
							<div class='col-auto h6 d-inline-flex mb-1 px-3 py-2 fw-semibold text-danger border border-danger rounded-2 me-2 text-center'>
								<div class="d-flex flex-column">
									<span class="text-dark h6 m-0 p-0">Expired</span>
									<hr class="text-dark m-0 p-0"> 
									<span class="h1 m-0 p-2" id="dataI">0</span>  
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Business Type</th>
										<th>Line of Business</th>
										<th>Business Name</th>
										<th>Business Owner/s</th>
										<th>Plate No.</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $cntInactive = $cntActive = $cntExpire = 0; foreach ($list as $key => $row): ?>
										<tr class="
											<?php
												if($row->business_status == 0)
												{
													echo 'table-danger'; 
													$cntInactive++;
												}
												elseif($row->business_status == 1)
												{
													echo 'table-success'; 
													$cntActive++;
												}
												elseif($row->business_status == 2)
												{
													echo 'table-warning'; 
													$cntExpire++;
												}
											
											?>
										">
											<td><?php echo ++$key?></td>
											<td><?php echo $row->business_type?></td>
											<td><?php echo $row->business_line_desc?></td>
											<td><?php echo $row->business_name?></td>
											<td><?php echo $row->business_owner?></td>
											<td><?php echo $row->business_plate_no?></td>
											<td><?php 
                                                    if($row->business_eval_status == 1)
                                                        echo '<span class="badge text-bg-success">Approved</span>';
                                                    elseif($row->business_eval_status == 2)
                                                        echo '<span class="badge text-bg-danger">Disapproved</span>';
                                                    else
                                                        echo '<span class="badge text-bg-secondary">For Approval</span>';
                                                ?>
                                            </td>
											<td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" id="btnApprovedTax" data-bs-toggle="modal" data-bs-target="#evaluate" data-id="<?php echo $row->business_other_details_id  ?>" data-bid="<?php echo $row->business_other_business_id  ?>">
                                                    Approve
                                                </button>
                                            </td>
                                        </tr>
									<?php endforeach ?>
									<span id="dataCntRemarks"
										data-cntI = "<?php echo $cntInactive;?>"
										data-cntA = "<?php echo $cntActive;?>"
										data-cntW = "<?php echo $cntExpire;?>"
										hidden>
									</span>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    let dataCnt = document.getElementById("dataCntRemarks");
    document.getElementById("dataI").innerHTML=dataCnt.getAttribute('data-cntI')  
    document.getElementById("dataA").innerHTML=dataCnt.getAttribute('data-cntA')  
    document.getElementById("dataW").innerHTML=dataCnt.getAttribute('data-cntW')  
</script>


<!-- Modal -->
<?php echo form_open('business/update_tax'); ?>
<?php echo form_hidden('business_other_business_id',0); ?>
<div class="modal fade" id="evaluate" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Approval</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                          <label for="" class="form-label">Comment</label>
                          <textarea class="form-control" name="business_comment" id="" rows="3"></textarea>
                        </div>
                        <span id="tax_id" hidden></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="business_eval_status" value="1">Approve</button>
                <button type="submit" class="btn btn-danger" name="business_eval_status" value="2">Disapprove</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>

<!-- <script>
    var modalId = document.getElementById('modalId');

    modalId.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          let button = event.relatedTarget;
          // Extract info from data-bs-* attributes
          let recipient = button.getAttribute('data-bs-whatever');

        // Use above variables to manipulate the DOM
    });
</script> -->
