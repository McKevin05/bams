<div class="row settings-page">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="theming-tab" data-bs-toggle="tab" data-bs-target="#theming" type="button" role="tab" aria-controls="theming" aria-selected="true">Theming</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">General</button>
                          </li>
                        </ul>
                        
                        <!-- Tab panes -->
                          <div class="tab-content">
                          <div class="tab-pane active" id="theming" role="tabpanel" aria-labelledby="theming-tab">
                             <div class="row mt-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <a href="<?php echo base_url('settings/add') ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Theme</a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <form class="row row-cols-lg-auto g-3 align-items-center">
                                        <div class="col-12">
                                            <label class="" for="inlineFormSelectPref">Search Theme:</label>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
                                            
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Theme</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Default Theme</td>
                                                    <td><span class="badge text-bg-success">ACTIVE</span></td>
                                                    <th><a href="<?php echo base_url('settings/view') ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Property"><i class="fas fa-eye"></i> View</a></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             </div>
                          </div>
                          <div class="tab-pane" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <?php echo view('settings/general') ?>
                          </div>
                        </div>
                    </div>                
                </div>
                
				
			</div>
		</div>
	</div>
</div>