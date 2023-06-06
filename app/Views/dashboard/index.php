<div class="card rounded-0" style="min-width: 280px;">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
		<button class="nav-link btntab rounded-0 active" id="resident-section" data-tab="resident" data-bs-toggle="tab" data-bs-target="#resident-tab" type="button" role="tab" aria-controls="resident-tab" aria-selected="true">Resident</button>
		</li>
		<li class="nav-item" role="presentation">
		<button class="nav-link btntab rounded-0" id="business-section" data-tab="business" data-bs-toggle="tab" data-bs-target="#business-tab" type="button" role="tab" aria-controls="business-tab" aria-selected="false">Business</button>
		</li>
		<li class="nav-item" role="presentation">
		<button class="nav-link btntab rounded-0" id="property-section" data-tab="property" data-bs-toggle="tab" data-bs-target="#property-tab" type="button" role="tab" aria-controls="property-tab" aria-selected="false">Property</button>
		</li>
		<li class="nav-item" role="presentation">
		<button class="nav-link btntab rounded-0" id="project-section" data-tab="projects" data-bs-toggle="tab" data-bs-target="#proj-prog-tab" type="button" role="tab" aria-controls="proj-prog-tab" aria-selected="false">Project and Programs</button>
		</li>
		<li class="nav-item" role="presentation">
		<button class="nav-link btntab rounded-0" id="cert-section" data-tab="certificate" data-bs-toggle="tab" data-bs-target="#certificate-tab" type="button" role="tab" aria-controls="certificate-tab" aria-selected="false">Certificates</button>
		</li>
	</ul>
	<div class="card-body">


		<!-- RESIDENTS -->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="resident-tab" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row g-3 dashboard mt-3">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
							<div class="card card-box">
								<div class="card-icon bg-warning"><i class="fas fa-users"></i></div>
								<div class="card-body d-flex justify-content-between align-items-center">
									<span class="h6 w-50 m-0">Total Residents</span>
									<span class="h4 w-50 m-0 text-end"><?php echo $resident->cntRes ?></span>
								</div>
								<div class="card-footer">
									<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
								</div>
							</div>
						</div> 
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
							<div class="card card-box">
								<div class="card-icon bg-success"><i class="fas fa-users"></i></div>
								<div class="card-body d-flex justify-content-between align-items-center">
									<span class="h6 w-50 m-0">Total Owners</span>
									<span class="h4 w-50 m-0 text-end"><?php echo $resident->owner ?></span>
								</div>
								<div class="card-footer">
									<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
								</div>
							</div>
						</div>  
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
							<div class="card card-box">
								<div class="card-icon bg-danger"><i class="fas fa-user-group"></i></div>
								<div class="card-body d-flex justify-content-between align-items-center">
									<span class="h6 w-50 m-0">Total Rentee</span>
									<span class="h4 w-50 m-0 text-end"><?php echo $resident->rentee ?></span>
								</div>
								<div class="card-footer">
									<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
							<div class="card card-box">
								<div class="card-icon bg-primary"><i class="fas fa-users"></i></div>
								<div class="card-body d-flex justify-content-between align-items-center">
									<span class="h6 w-50 m-0">Total Voters</span>
									<span class="h4 w-50 m-0 text-end"><?php echo $resident->voters ?></span>
								</div>
								<div class="card-footer">
									<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
								</div>
							</div>
						</div>  
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-3" style="min-width: 230px;">
							<div class="card bg-default">
								<div class="card-body">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Age Chart </b></div>
											
											<canvas id="ageChart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-3" style="min-width: 230px;">
							<div class="card bg-default">
								<div class="card-body">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Gender Chart</b></div>

											<canvas id="genderChart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-3" style="min-width: 230px;">
							<div class="card bg-default">
								<div class="card-body">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Population Sector Chart</b></div>
											<canvas id="sectorChart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3" style="min-width: 230px;">
							<div class="card bg-default">
								<div class="card-body">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Population Per Street Chart</b></div>
											<canvas id="streetChart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- BUSINESS -->
			<div class="tab-pane fade" id="business-tab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
				<div class="row gx-3 dashboard mt-3">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-warning"><i class="fas fa-briefcase"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Business</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-success"><i class="fas fa-building-circle-check"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Active</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-danger"><i class="fas fa-building-circle-xmark"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Inactive</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-primary"><i class="fas fa-business-time"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Pending</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-cyan"><i class="fas fa-user-tie"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Sole Proprietorship</span>
								<span class="h4 w-50 m-0 text-end" id="businessSP">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-indigo"><i class="fas fa-people-arrows"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Partnership</span>
								<span class="h4 w-50 m-0 text-end" id="businessP">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-pink"><i class="fas fa-users-between-lines"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Corporation</span>
								<span class="h4 w-50 m-0 text-end" id="businessCorp">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-orange"><i class="fas fa-users-rectangle"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Cooperative</span>
								<span class="h4 w-50 m-0 text-end" id="businessCoop">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
								<div class="card bg-default">
									<div class="card-body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Line of Business</b></div>
												<canvas id="lineBusinessChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- PROPERTY -->
			<div class="tab-pane fade" id="property-tab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
				<div class="row gx-3 dashboard mt-3">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-warning"><i class="fas fa-building"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Apartment</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-success"><i class="fas fa-users"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Rentee</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-danger"><i class="fas fa-city"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Condominium / Building</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-primary"><i class="fas fa-building"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Vacants / Open Spaces</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
								<div class="card bg-default">
									<div class="card-body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Line of Property</b></div>
												<canvas id="lineBusinessChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- PROPERTY -->

			<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
						<div class="card bg-default">
							<div class="card-body">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<canvas id="ageChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- PROJECT AND PROGRAMS -->
			<div class="tab-pane fade" id="proj-prog-tab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
				<div class="row gx-3 dashboard mt-3">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-warning"><i class="fas fa-briefcase"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Total Projects</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-success"><i class="fas fa-building-circle-check"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0"></span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-danger"><i class="fas fa-building-circle-xmark"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0"></span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-primary"><i class="fas fa-business-time"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0"></span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
								<div class="card bg-default">
									<div class="card-body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Line of Business</b></div>
												<canvas id="lineBusinessChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- CERTIFICATES -->
			<div class="tab-pane fade" id="certificate-tab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
				<div class="row gx-3 dashboard mt-3">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-warning"><i class="fas fa-briefcase"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Pending Certificates</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-primary"><i class="fas fa-business-time"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">On-going Certificates</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-danger"><i class="fas fa-briefcase"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Released Certificates</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="min-width: 230px;">
						<div class="card card-box">
							<div class="card-icon bg-primary"><i class="fas fa-business-time"></i></div>
							<div class="card-body d-flex justify-content-between align-items-center">
								<span class="h6 w-50 m-0">Cancelled Certificates</span>
								<span class="h4 w-50 m-0 text-end" id="">0</span>
							</div>
							<div class="card-footer">
								<small><i class="fas fa-calendar text-mute"></i> &nbsp;Data as of Today </small>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
								<div class="card bg-default">
									<div class="card-body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="d-flex justify-content-center text-center border-bottom mb-2"><b>Line of Certificates</b></div>
												<canvas id="lineBusinessChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>