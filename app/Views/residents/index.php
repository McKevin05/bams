<div class="card rounded-0 residents-ct" style="min-width: 280px;">
	<div class="card-body">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				<h3 class="sub-title">List of Residents</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php button("ADD","Add New Residents ",NULL,base_url('residents/add'),NULL); ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				<?php echo form_open(base_url('residents'),"id='frm_search_resident' class='row row-cols-lg-auto  align-items-center'") ?>
					<div class="col-12" id="residentSearch" >
					<label class="" for="searchResident">Search By:</label>
					<?php echo form_dropdown('by',$search,NULL,'class="form-select" id="searchResident" aria-label="Floating label select example"') ?>
					</div>

					<div class="col-12 rSearch">
					<label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
						<input type="text" name="search_text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
					</div>
					<div class="col-12">
					<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-search"></i> Search</button>
					</div>
					<?php if ($searchR): ?>
					<div class="col-12">
						<?php button("PRINT","Report",NULL,base_url('residents/report'),"mt-4"); ?>
						<!-- <a href="<?php //echo base_url('residents/report') ?>" class="btn btn-primary mt-4"><i class="fas fa-search"></i> Report</a> -->
					</div>
					<?php endif ?>
				<?php echo form_close() ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				<label id="genderMale"></label>
				<label id="genderFemale"></label>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Resident ID NO.</th>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Street</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $male = 0 ;$female = 0; ?>
							<?php $cnt = 1; foreach ($list as $key => $row): ?>
								<?php 
									if ($row->gender == 1)
										$male++;
									else
										$female++;
								?>
								<tr>
									<td><?php echo $cnt++ ?></td>
									<td><?php echo $row->resident_code ?></td>
									<td><?php echo $row->lastname ?></td>
									<td><?php echo $row->firstname ?></td>
									<td><?php echo $row->middlename ?></td>
									<td><?php echo $row->street_desc ?></td>
									<td>
										<?php button("VIEW","View",NULL,base_url("residents/view/{$row->resident_info_id}"),NULL); ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<div id="genderStat" data-male="<?php echo $male ?>" data-female="<?php echo $female ?>" hidden></div>
				</div>
			</div>
		</div>
	</div>
</div>