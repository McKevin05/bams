<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<label id="genderMale"></label>
		<label id="genderFemale"></label>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>RESIDENT ID NO.</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Street</th>
					</tr>
				</thead>
				<tbody>
					<?php $male = 0 ;$female = 0; ?>
					<?php foreach ($list as $key => $row): ?>
						<?php 
							if ($row->gender == 1)
								$male++;
							else
								$female++;
						?>
						<tr>
							<td><?php echo $row->resident_info_id ?></td>
							<td><?php echo $row->resident_info_id ?></td>
							<td><?php echo $row->lastname ?></td>
							<td><?php echo $row->firstname ?></td>
							<td><?php echo $row->middlename ?></td>
							<td><?php echo $row->street_desc ?></td>
						</tr>
					<?php endforeach ?>
					
					<!-- <tr>
						<td>1</td>
						<td>PDP-202200001</td>
						<td>DIAZ</td>
						<td>Mc Jayvee</td>
						<td>Ortiz</td>
						<td>HULO</td>
						<th><a href="<?php echo base_url('residents/view') ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Profile"><i class="fas fa-eye"></i> View Profile</a></th>
					</tr> -->
				</tbody>
			</table>
			<div id="genderStat" data-male="<?php echo $male ?>" data-female="<?php echo $female ?>" hidden></div>
		</div>
	</div>
</div>