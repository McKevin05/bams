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
						<?php $link = base_url('business/add'); echo show("<a href='{$link}' class='btn btn-sm btn-success'><i class='fas fa-plus-circle'></i> Add New Business</a>",TRUE) ?>
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
										<th>Validity/Expiry</th>
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
											<td><?php echo $row->business_clearance_validity?></td>
											<th><a href="<?php echo base_url("business/view/{$row->business_id}") ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Business"><i class="fas fa-eye"></i></a></th>
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